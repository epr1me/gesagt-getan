window.addEventListener('DOMContentLoaded', (event) => {
	jQuery(function($) {
			$('.draggable-asset').each(function () {
					$(this).draggable({
							helper: 'clone',
							opacity: 0.3,
							revert: 'invalid',
							revertDuration: 200,
							start: function (event, ui) {
									$(event.toElement).closest('a').one('click', function (e) {
											e.preventDefault();
									});
							},
							stop: function (event, ui) {
									// event.toElement is the element that was responsible
									// for triggering this event. The handle, in case of a draggable.
									$(event.toElement).closest('a').off('click');
							}
					});
			});

			var tagAssetForm = $('#tag-asset-form'),
					assetField = $('#tag-asset-form-asset', tagAssetForm),
					tagField = $('#tag-asset-form-tag', tagAssetForm);
			$('.droppable-tag').each(function () {
					$(this).droppable({
							addClasses: false,
							activeClass: 'neos-drag-active',
							hoverClass: 'neos-drag-hover',
							tolerance: 'pointer',
							drop: function (event, ui) {
									var tag = $(this),
											asset = $(ui.draggable[0]),
											assetIdentifier = asset.data('asset-identifier') || asset.parent().data('asset-identifier'),
											countElement = tag.children('span'),
											count = parseInt(countElement.text());
									assetField.val(assetIdentifier);
									tagField.val(tag.data('tag-identifier'));
									countElement.html('<span class="neos-ellipsis" />');
									$.post(
											tagAssetForm.attr('action'),
											$('#tag-asset-form').serialize(),
											'json'
									).done(function (result) {
											if (result === true) {
													countElement.html(count + 1);
													var text = tag.clone();
													text.children().remove();
													$('[data-asset-identifier="' + assetIdentifier + '"]').children('.tags').append('\n<span class="neos-label">' + text.text() + '</span>');
													if (asset.hasClass('neos-media-untagged')) {
															var untagged = $('.count', '.neos-media-list-untagged');
															untagged.text(parseInt(untagged.text()) - 1);
															asset.removeClass('neos-media-untagged');
													}
											} else {
													countElement.html(count);
											}
									}).fail(function () {
											var message = 'Tagging the asset failed.';
											if (window.NeosCMS) {
													message = window.NeosCMS.I18n.translate('taggingAssetsFailed', message, 'Neos.Media.Browser');
													window.NeosCMS.Notification.error(message);
											} else {
													alert(message);
											}
									});
							}
					});
			});

			var linkAssetToCollectionForm = $('#link-asset-to-assetcollection-form'),
					linkAssetToCollectionAssetField = $('#link-asset-to-assetcollection-form-asset', linkAssetToCollectionForm),
					linkAssetToCollectionField = $('#link-asset-to-assetcollection-form-assetcollection', linkAssetToCollectionForm);
			$('.droppable-assetcollection').each(function () {
					$(this).droppable({
							addClasses: false,
							activeClass: 'neos-drag-active',
							hoverClass: 'neos-drag-hover',
							tolerance: 'pointer',
							drop: function (event, ui) {
									var assetCollection = $(this),
											asset = $(ui.draggable[0]),
											assetIdentifier = asset.data('asset-identifier') || asset.parent().data('asset-identifier'),
											countElement = assetCollection.children('span'),
											count = parseInt(countElement.text());
									linkAssetToCollectionAssetField.val(assetIdentifier);
									linkAssetToCollectionField.val(assetCollection.data('assetcollection-identifier'));
									countElement.html('<span class="neos-ellipsis" />');
									$.post(
											linkAssetToCollectionForm.attr('action'),
											$('#link-asset-to-assetcollection-form').serialize(),
											'json'
									).done(function (result) {
											if (result === true) {
													countElement.html(count + 1);
													var text = assetCollection.clone();
													text.children().remove();
											} else {
													countElement.html(count);
											}
									}).fail(function () {
											var message = 'Adding the asset to the collection failed.';
											if (window.NeosCMS) {
													message = window.NeosCMS.I18n.translate('addingAssetsToCollectionFailed', message, 'Neos.Media.Browser');
													window.NeosCMS.Notification.error(message);
											} else {
													alert(message);
											}
									});
							}
					});
			});

			$('.neos-media-aside-list-edit-toggle').click(function () {
					$(this).toggleClass('neos-active');
					$(this).closest('.neos-media-aside-group').children('ul, form').toggleClass('neos-media-aside-list-editing-active');
			});

			$('.neos-media-aside-group > form').submit(function (e) {
					var value = $('input[type="text"]', this);
					if ($.trim(value.val()) === '') {
							value.focus();
							e.preventDefault();
					} else {
							var label = window.NeosCMS.I18n.translate('creating', 'Creating', 'Neos.Media.Browser');
							$('button[type="submit"]', this).addClass('neos-disabled').html(label + '<span class="neos-ellipsis" />');
					}
			});


			const modalOpened = (_event) => {
				const trigger = _event.target;
				const modalIdentifier = window.NeosCMS.Helper.getCollectionValueByPath(_event, 'detail.identifier');
				const modal = document.getElementById(modalIdentifier);
				if (!window.NeosCMS.Helper.isNil(trigger) && !window.NeosCMS.Helper.isNil(modal)) {
					const objectIdentifier = trigger.getAttribute('data-object-identifier');
					modal.querySelector('#modal-form-object').setAttribute('value', objectIdentifier);
				}
			}
			window.addEventListener('neoscms-modal-opened', modalOpened, false)
	});
});
