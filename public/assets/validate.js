/* <![CDATA[ */
jQuery(document).on('ready', function () {

	"use strict";
	
	// Jquery validate home contact form
	$('#contact_home').on('submit', function () {
		'use strict';
		var action = $(this).attr('action');
		var $msg_home = $('#message-home');
		$msg_home.slideUp(750, function () {
			$msg_home.hide();
			$('#submit-contact-home')
				.after('<i class="icon-spin4 animate-spin loader"></i>')
				.attr('disabled', 'disabled');

			$.post(action, {
					name_contact_home: $('#name_contact_home').val(),
					email_contact_home: $('#email_contact_home').val(),
					phone_contact_home: $('#phone_contact_home').val()
				},
				function (data) {
					document.getElementById('message-home').innerHTML = data;
					$msg_home.slideDown('slow');
					$('#contact_home .loader').fadeOut('slow', function () {
						$(this).remove()
					});
					$('#submit-contact-home').removeAttr('disabled');
					if (data.match('success') != null) $('#contact_home').slideUp('slow');

				}
			);
		});
		return false;
	});

	/// Jquery validate newsletter
	$('#newsletter_form').on('submit', function () {
		var action = $(this).attr('action');
		var $msg_news = $('#message-newsletter');
		$msg_news.slideUp(750, function () {
			$msg_news.hide();
			$('#submit-newsletter')
				.after('<i class="icon-spin4 animate-spin loader"></i>')
				.attr('disabled', 'disabled');
			$.post(action, {
					email_newsletter: $('#email_newsletter').val()
				},
				function (data) {
					document.getElementById('message-newsletter').innerHTML = data;
					$msg_news.slideDown('slow');
					$('#newsletter_form .loader').fadeOut('slow', function () {
						$(this).remove()
					});
					$('#submit-newsletter').removeAttr('disabled');
					if (data.match('success') != null) $('#newsletter_form').slideUp('slow');
				}
			);
		});
		return false;
	});

	// Jquery validate form quote
	$('#quoteform').on('submit', function () {
		'use strict';
		var action = $(this).attr('action');
		var $msg_quote = $('#message-quote');
		$msg_quote.slideUp(750, function () {
			$msg_quote.hide();
			$('#submit-quote')
				.after('<i class="icon-spin4 animate-spin loader"></i>')
				.attr('disabled', 'disabled');
			$.post(action, {
					name_quote: $('#name_quote').val(),
					lastname_quote: $('#lastname_quote').val(),
					email_quote: $('#email_quote').val(),
					phone_quote: $('#phone_quote').val(),
					url_quote: $('#url_quote').val(),
					message_quote: $('#message_quote').val(),
					verify_quote: $('#verify_quote').val()
				},
				function (data) {
					document.getElementById('message-quote').innerHTML = data;
					$msg_quote.slideDown('slow');
					$('#quoteform .loader').fadeOut('slow', function () {
						$(this).remove()
					});
					$('#submit-quote').removeAttr('disabled');
					if (data.match('success') != null) $('#quoteform').slideUp('slow');
				}
			);
		});
		return false;
	});

	// Jquery validate form contact
	$('#contactform').on('submit', function () {
		var action = $(this).attr('action');
		var $msg_contact = $('#message-contact');
			$msg_contact.slideUp(750, function () {
			$msg_contact.hide();
			$('#submit-contact')
				.after('<i class="icon-spin4 animate-spin loader"></i>')
				.attr('disabled', 'disabled');
			$.post(action, {
					name_contact: $('#name_contact').val(),
					lastname_contact: $('#lastname_contact').val(),
					email_contact: $('#email_contact').val(),
					phone_contact: $('#phone_contact').val(),
					message_contact: $('#message_contact').val(),
					verify_contact: $('#verify_contact').val()
				},
				function (data) {
					document.getElementById('message-contact').innerHTML = data;
					$msg_contact.slideDown('slow');
					$('#contactform .loader').fadeOut('slow', function () {
						$(this).remove()
					});
					$('#submit-contact').removeAttr('disabled');
					if (data.match('success') != null) $('#contactform').slideUp('slow');

				}
			);
		});
		return false;
	});
	
});
/* ]]> */