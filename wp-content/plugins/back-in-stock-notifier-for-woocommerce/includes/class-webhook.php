<?php

if (!defined('ABSPATH')) {
	exit;
}

if (!class_exists('CWG_Instock_Webhook')) {

	class CWG_Instock_Webhook {

		public function __construct() {
			add_filter('woocommerce_webhook_topic_hooks', array($this, 'add_topic'));
			add_filter('woocommerce_webhook_topics', array($this, 'title_topics'));
			add_filter('woocommerce_valid_webhook_resources', array($this, 'add_values_to_resources'));
			add_filter('woocommerce_webhook_payload', array($this, 'resource_payload'), 10, 4);
			add_action('transition_post_status', array($this, 'resource_upon_update'), 10, 3);
		}

		public function add_topic( $topics) {
			$new_topic = array(
				'subscriber.created' => array(
					'cwginstock_after_insert_subscriber',
				),
				'subscriber.updated' => array(
					'cwginstock_subscriber_updated',
				),
			);
			return array_merge($topics, $new_topic);
		}

		public function add_values_to_resources( $resources) {
			$new_events = array(
				'subscriber'
			);
			return array_merge($resources, $new_events);
		}

		public function title_topics( $topics) {
			$new_topics = array(
				'subscriber.created' => 'Subscriber Created',
				'subscriber.updated' => 'Subscriber upon Status Change',
			);

			return array_merge($topics, $new_topics);
		}

		public function resource_payload( $payload, $resource, $resource_id, $webhook_id) {
			if ('subscriber' == $resource) {
				$variation_id = get_post_meta($resource_id, 'cwginstock_variation_id', true);
				$product_id = get_post_meta($resource_id, 'cwginstock_product_id', true);
				$subscriber_name = get_post_meta($resource_id, 'cwginstock_subscriber_name', true);
				$subscriber_email = get_post_meta($resource_id, 'cwginstock_subscriber_email', true);
				$post_date = get_the_date('', $resource_id);
				$post_status = str_replace('cwg_', '', get_post_status($resource_id));
				$pid = get_post_meta($resource_id, 'cwginstock_pid', true);
				$sku = new CWG_Instock_API();
				$sku = $sku->get_product_sku($resource_id);

				$subscriber_data = apply_filters('cwginstock_payload_data', array(
					'name' => $subscriber_name,
					'email' => $subscriber_email,
					'product_id' => $product_id,
					'variation_id' => $variation_id,
					'sku' => $sku,
					'status' => $post_status,
					'subscribed_date' => $post_date
						), $resource_id, $webhook_id);
				$payload = $subscriber_data;
			}
			return $payload;
		}

		public function resource_upon_update( $new, $old, $post) {
			//post type
			$post_type = $post->post_type;
			if ('cwginstocknotifier' == $post_type) {
				do_action('cwginstock_subscriber_updated', $post->ID);
			}
		}

	}

	new CWG_Instock_Webhook();
}
