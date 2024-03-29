<?php
defined('ABSPATH') || exit;


// Menu page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Contacts settings', 'rmbt_impex'),
		'id' => 'settings_contacts',
		'desc' => esc_html__('Contacts', 'rmbt_impex'),
		'customizer_width' => '450',
		// 'subsection' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(
			array(
				'id' => 'address',
				'type' => 'textarea',
				'title' => esc_html__('Enter Your Address', 'rmbt_impex'),
				'default' => esc_html__('Enter Your Address', 'rmbt_impex'),
			),
			//phone_numbers-accordion-start
			// array(
			// 	'id' => 'phone_numbers-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Section of Phone Numbers', 'restaurant-site'),
			// 	'subtitle' => 'Here you can set your phone numbers',
			// 	'position' => 'start',
			// ),
			//phone_numbers 1 section start
			array(
				'id' => 'name-phone-1-section-start',
				'type' => 'section',
				'title' => esc_html__('Phone Number 1', 'rmbt_impex'),
				'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_impex'),
				'indent' => true
			),

			array(
				'id' => 'name-phone-1',
				'type' => 'text',
				'title' => esc_html__('Add name of your first phone number', 'rmbt_impex'),
				'default' => esc_html__('name of number phone 1'),
			),
			array(
				'id' => 'number-phone-1',
				'type' => 'text',
				'title' => esc_html__('Add your first phone number', 'rmbt_impex'),
				'default' => esc_html__('your phone number'),
			),

			array(
				'id'     => 'name-phone-1-end',
				'type'   => 'section',
				'indent' => false,
			),
			//phone_numbers 1 section end
			// -----------------------------------
			//phone_numbers 2 section start
			array(
				'id' => 'name-phone-2-section-start',
				'type' => 'section',
				'title' => esc_html__('Phone Number 2', 'rmbt_impex'),
				'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_impex'),
				'indent' => true
			),

			array(
				'id' => 'name-phone-2',
				'type' => 'text',
				'title' => esc_html__('Add name of your second phone number', 'rmbt_impex'),
				'default' => esc_html__('name of number phone 2'),
			),
			array(
				'id' => 'number-phone-2',
				'type' => 'text',
				'title' => esc_html__('Add your second phone number', 'rmbt_impex'),
				'default' => esc_html__('your phone number'),
			),

			array(
				'id'     => 'name-phone-2-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//phone_numbers 2 section end
			// -----------------------------------
			//phone_numbers 3 section start
			array(
				'id' => 'name-phone-3-section-start',
				'type' => 'section',
				'title' => esc_html__('Phone Number 3', 'rmbt_impex'),
				'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_impex'),
				'indent' => true
			),

			array(
				'id' => 'name-phone-3',
				'type' => 'text',
				'title' => esc_html__('Add name of your third phone number', 'rmbt_impex'),
				'default' => esc_html__('name of number phone 3'),
			),
			array(
				'id' => 'number-phone-3',
				'type' => 'text',
				'title' => esc_html__('Add your third phone number', 'rmbt_impex'),
				'default' => esc_html__('your phone number'),
			),

			array(
				'id'     => 'name-phone-3-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//phone_numbers 3 section end			// -----------------------------------
			//phone_numbers 4 section start
			array(
				'id' => 'name-phone-4-section-start',
				'type' => 'section',
				'title' => esc_html__('Phone Number 4', 'rmbt_impex'),
				'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_impex'),
				'indent' => true
			),

			array(
				'id' => 'name-phone-4',
				'type' => 'text',
				'title' => esc_html__('Add name of your fourth phone number', 'rmbt_impex'),
				'default' => esc_html__('name of number phone 4'),
			),
			array(
				'id' => 'number-phone-4',
				'type' => 'text',
				'title' => esc_html__('Add your fourth phone number', 'rmbt_impex'),
				'default' => esc_html__('your phone number'),
			),

			array(
				'id'     => 'name-phone-4-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//phone_numbers 4 section end			// -----------------------------------
			//phone_numbers 5 section start
			array(
				'id' => 'name-phone-5-section-start',
				'type' => 'section',
				'title' => esc_html__('Phone Number 5', 'rmbt_impex'),
				'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_impex'),
				'indent' => true
			),

			array(
				'id' => 'name-phone-5',
				'type' => 'text',
				'title' => esc_html__('Add name of your fifth phone number', 'rmbt_impex'),
				'default' => esc_html__('name of number phone 5'),
			),
			array(
				'id' => 'number-phone-5',
				'type' => 'text',
				'title' => esc_html__('Add your fifth phone number', 'rmbt_impex'),
				'default' => esc_html__('your phone number'),
			),

			array(
				'id'     => 'name-phone-5-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//phone_numbers 5 section end			// -----------------------------------
			//phone_numbers 6 section start
			array(
				'id' => 'name-phone-6-section-start',
				'type' => 'section',
				'title' => esc_html__('Phone Number 6', 'rmbt_impex'),
				'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_impex'),
				'indent' => true
			),

			array(
				'id' => 'name-phone-6',
				'type' => 'text',
				'title' => esc_html__('Add name of your sixth phone number', 'rmbt_impex'),
				'default' => esc_html__('name of number phone 6'),
			),
			array(
				'id' => 'number-phone-6',
				'type' => 'text',
				'title' => esc_html__('Add your sixth phone number', 'rmbt_impex'),
				'default' => esc_html__('your phone number'),
			),

			array(
				'id'     => 'name-phone-6-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//phone_numbers 6 section end


			// array(
			// 	'id' => 'phone_numbers-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),
			//phone_numbers-accordion-end


			//email 1 section start
			array(
				'id' => 'name-email-1-section-start',
				'type' => 'section',
				'title' => esc_html__('Email 1', 'rmbt_impex'),
				'subtitle' => esc_html__('Enter email and set his name', 'rmbt_impex'),
				'indent' => true
			),

			array(
				'id' => 'name-email-1',
				'type' => 'text',
				'title' => esc_html__('Add name of your first email', 'rmbt_impex'),
				'default' => esc_html__('name of email 1'),
			),
			array(
				'id' => 'email-1',
				'type' => 'text',
				'title' => esc_html__('Add your first email', 'rmbt_impex'),
				'default' => esc_html__('your email 1'),
			),

			array(
				'id'     => 'email-1-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//email_numbers 1 section end
			//email 2 section start
			array(
				'id' => 'name-email-2-section-start',
				'type' => 'section',
				'title' => esc_html__('Email 2', 'rmbt_impex'),
				'subtitle' => esc_html__('Enter email and set his name', 'rmbt_impex'),
				'indent' => true
			),

			array(
				'id' => 'name-email-2',
				'type' => 'text',
				'title' => esc_html__('Add name of your second email', 'rmbt_impex'),
				'default' => esc_html__('name of email 2'),
			),
			array(
				'id' => 'email-2',
				'type' => 'text',
				'title' => esc_html__('Add your second email', 'rmbt_impex'),
				'default' => esc_html__('your email 2'),
			),

			array(
				'id'     => 'email-2-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//email_numbers 2 section end
			//email 3 section start
			array(
				'id' => 'name-email-3-section-start',
				'type' => 'section',
				'title' => esc_html__('Email 3', 'rmbt_impex'),
				'subtitle' => esc_html__('Enter email and set his name', 'rmbt_impex'),
				'indent' => true
			),

			array(
				'id' => 'name-email-3',
				'type' => 'text',
				'title' => esc_html__('Add name of your third email', 'rmbt_impex'),
				'default' => esc_html__('name of email 3'),
			),
			array(
				'id' => 'email-3',
				'type' => 'text',
				'title' => esc_html__('Add your third email', 'rmbt_impex'),
				'default' => esc_html__('your email 3'),
			),

			array(
				'id'     => 'email-3-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//email_numbers 3 section end
			//email 4 section start
			array(
				'id' => 'name-email-4-section-start',
				'type' => 'section',
				'title' => esc_html__('Email 4', 'rmbt_impex'),
				'subtitle' => esc_html__('Enter email and set his name', 'rmbt_impex'),
				'indent' => true
			),

			array(
				'id' => 'name-email-4',
				'type' => 'text',
				'title' => esc_html__('Add name of your fourth email', 'rmbt_impex'),
				'default' => esc_html__('name of email 4'),
			),
			array(
				'id' => 'email-4',
				'type' => 'text',
				'title' => esc_html__('Add your fourth email', 'rmbt_impex'),
				'default' => esc_html__('your email 4'),
			),

			array(
				'id'     => 'email-4-section-end',
				'type'   => 'section',
				'indent' => false,
			),
			//email_numbers 4 section end


		),
	)
);
