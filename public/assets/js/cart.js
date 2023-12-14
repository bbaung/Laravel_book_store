
								$(document).ready(function() {
												// Increment button
												$(".plusBtn").click(function() {
																var $parent = $(this).closest("tr");
																var currentVal = parseInt($parent.find(".quantityInput").val());
																if (!isNaN(currentVal)) {
																				$parent.find(".quantityInput").val(currentVal + 1);
																} else {
																				$parent.find(".quantityInput").val(1);
																}

																var price = parseInt($parent.find(".price").text());
																var quantity = parseInt($parent.find(".quantityInput").val());
																var totalPrice = price * quantity;
																$parent.find(".totalPrice").text(totalPrice);
												});

												// Decrement button
												$(".minusBtn").click(function() {
																var $parent = $(this).closest("tr");
																var currentVal = parseInt($parent.find(".quantityInput").val());
																if (!isNaN(currentVal) && currentVal > 1) {
																				$parent.find(".quantityInput").val(currentVal - 1);

																				var price = parseInt($parent.find(".price").text());
																				var quantity = parseInt($parent.find(".quantityInput").val());
																				var totalPrice = price * quantity;
																				$parent.find(".totalPrice").text(totalPrice);
																} else {
																				$parent.find(".quantityInput").val(1);
																}
												});

												$(document).on("click", ".deleteBtn", function() {
																var $row = $(this).closest("tr");
																$row.fadeOut(400, function() {
																				$(this).slideUp(400, function() {
																								$(this).remove();
																				});
																});
																// Slide up other rows
																$row.siblings().animate({
																				marginTop: '-=' + $row.outerHeight()
																}, 400);
												});
								});
