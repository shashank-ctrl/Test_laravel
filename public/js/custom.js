$(window).scroll(function () {
	if ($(this).scrollTop() > 50) {
		$(".header").addClass("header-sticky");
		$(".header").addClass("fadeInDown");
		$(".header").addClass("animated");
		$(".header").removeClass("headerFixed");
	} else {
		$(".header").addClass("headerFixed");
		$(".header").removeClass("header-sticky");
		$(".header").removeClass("animated");
		$(".header").removeClass("fadeInDown");
	}
});

$(document).ready(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$("#scroll").fadeIn();
		} else {
			$("#scroll").fadeOut();
		}
	});
	$("#scroll").click(function () {
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
});

var wobbleElements = document.querySelectorAll(".wobble");

wobbleElements.forEach(function (el) {
	el.addEventListener("mouseover", function () {
		if (
			!el.classList.contains("animating") &&
			!el.classList.contains("mouseover")
		) {
			el.classList.add("animating", "mouseover");

			var letters = el.innerText.split("");

			setTimeout(function () {
				el.classList.remove("animating");
			}, (letters.length + 1) * 50);

			var animationName = el.dataset.animation;
			if (!animationName) {
				animationName = "jump";
			}

			el.innerText = "";

			letters.forEach(function (letter) {
				if (letter == " ") {
					letter = "&nbsp;";
				}
				el.innerHTML += '<span class="letter">' + letter + "</span>";
			});

			var letterElements = el.querySelectorAll(".letter");
			letterElements.forEach(function (letter, i) {
				setTimeout(function () {
					letter.classList.add(animationName);
				}, 50 * i);
			});
		}
	});

	el.addEventListener("mouseout", function () {
		el.classList.remove("mouseover");
	});
});

var selector = "#filters button";

$(selector).on("click", function () {
	$(selector).removeClass("active");
	$(this).addClass("active");
});

var $grid = $(".tabssec .container").isotope({
	itemSelector: ".element-item",
	layoutMode: "fitRows",
	getSortData: {
		category: "[data-category]",
		weight: function (itemElem) {
			var weight = $(itemElem).find(".weight").text();
			return parseFloat(weight.replace(/[\(\)]/g, ""));
		},
	},
});

var filterFns = {
	numberGreaterThan50: function () {
		var number = $(this).find(".number").text();
		return parseInt(number, 10) > 50;
	},
	ium: function () {
		var name = $(this).find(".name").text();
		return name.match(/ium$/);
	},
};

var initialSlide = $('.slides-container [data-order="1"]');
var initalSelected = $('.slide-navigation__txt [data-order="1"]');
var mq_medium = window.matchMedia("(min-width: 860px)");
var mq_big = window.matchMedia("(min-width: 1200px)");

function activate_slide(order) {
	var unactiveSlide = $(".slide.active");
	var activeSlide = $('.slides-container [data-order="' + order + '"]');

	if (!activeSlide.hasClass("active")) {
		slide_in(activeSlide);
		slide_out(unactiveSlide);
	}
}

function slide_in(slide) {
	var _this = slide;

	animation_in(slide);
	_this.addClass("active");
	TweenMax.to(_this, 1, { autoAlpha: 1 }, "-=1");
}

function slide_out(slide) {
	var _this = slide;

	_this.css("z-index", "2");
	_this.removeClass("active");
	TweenMax.to(_this, 1, { autoAlpha: 0, onComplete: removeZ });

	function removeZ() {
		_this.css("z-index", "1");
	}

	animation_out(slide);
}

function animation_in(slide) {
	var title = slide.find("h1");
	var subtitle = $(slide).find("h2");
	var text = $(slide).find("p");
	var button = $(slide).find("button");
	var image = $(slide).find("img");

	TweenMax.fromTo(
		title,
		0.6,
		{ autoAlpha: 0, x: 100 },
		{ autoAlpha: 0.6, x: 0, ease: Power2.easeOut }
	);
	TweenMax.fromTo(
		subtitle,
		0.5,
		{ autoAlpha: 0, x: -200 },
		{ autoAlpha: 1, x: 0, ease: Power2.easeOut },
		"-0.1"
	);
	TweenMax.fromTo(
		text,
		0.8,
		{ autoAlpha: 0, x: 50 },
		{ autoAlpha: 1, x: 0, ease: Power2.easeOut }
	);
	TweenMax.fromTo(button, 0.5, { autoAlpha: 0 }, { autoAlpha: 1 });
	TweenMax.to(image, 0, { autoAlpha: 1, scale: 1 });
}

function animation_out(slide) {
	var title = slide.find("h1");
	var subtitle = $(slide).find("h2");
	var text = $(slide).find("p");
	var button = $(slide).find("button");
	var image = $(slide).find("img");

	TweenMax.to(title, 0.6, { autoAlpha: 0, x: 0 });
	TweenMax.to(subtitle, 0.5, { autoAlpha: 0, x: 200 });
	TweenMax.to(text, 0.5, { autoAlpha: 0 });
	TweenMax.to(button, 0.5, { autoAlpha: 0 });
	TweenMax.to(image, 1, { scale: 1.1 });
}

$(".slide-navigation__txt span").on("click", function () {
	var _this = $(this);
	var order = _this.data("order");
	var spans = $(".slide-navigation__txt span");
	var current = $(".active").data("order");
	if (order === 4) {
		p = 0;
	} else {
		p = order;
	}

	spans.removeClass("active");
	_this.addClass("active");
	activate_slide(order);
	stagger_squares(order, current);
});

function stagger_squares(order, current) {
	var mq = 0.7;
	var moveY;
	var squares = $(".slide-navigation__squares .square");
	var staggerTime = -0.12;

	if (order < current) {
		staggerTime = staggerTime * -1;
	}

	if (mq_medium.matches) {
		mq = 1;
	}
	if (mq_big.matches) {
		mq = 1.3;
	}

	moveY = (order - 1) * (15 * mq);
	TweenMax.staggerTo(squares, 0.1, { y: moveY }, staggerTime);
}
let p = 0;
$(document).ready(function () {
	var doc = document.getElementById("navSlide");
	var notes = null;
	setInterval(() => {
		if (p === 0) {
			document.querySelector(".discover").click();
		} else if (p === 1) {
			document.querySelector(".todo").click();
		} else if (p === 2) {
			document.querySelector(".plant2").click();
		} else {
			document.querySelector(".plant").click();
		}
	}, 9000);
});

$(document).ready(function () {
	initialSlide.addClass("active");
	initalSelected.addClass("active");
	TweenMax.to(initialSlide, 0.5, { autoAlpha: 1 });
});
let defultitem = 6;
let loadItem = 3;
if (screen.width < 1600 && screen.width >= 1299) {
	defultitem = 6;
	loadItem = 3;
} else if (screen.width < 1299 && screen.width > 991) {
	defultitem = 6;
	loadItem = 3;
} else if (screen.width < 991 && screen.width > 768) {
	defultitem = 2;
	loadItem = 2;
} else if (screen.width < 768 && screen.width > 575) {
	defultitem = 1;
	loadItem = 1;
}
$(document).ready(function () {
	$(".all").slice(0, defultitem).show();
	$("#seeMore").click(function (e) {
		e.preventDefault();
		$(".all:hidden").slice(0, loadItem).show();
		window.scrollTo(0, document.body.scrollHeight);
		if ($(".all:hidden").length == 0) {
			$(".see-more").css("display", "none");
		}
	});
});
$(document).ready(function () {
	$(".casestudies").slice(0, defultitem).show();
	$("#seeMore2").click(function (e) {
		e.preventDefault();
		$(".casestudies:hidden").slice(0, loadItem).show();
		window.scrollTo(0, document.body.scrollHeight);
		if ($(".casestudies:hidden").length == 0) {
			$(".see-more").css("display", "none");
		}
	});
});
$(document).ready(function () {
	$(".digitamarketing").slice(0, defultitem).show();
	$("#seeMore3").click(function (e) {
		e.preventDefault();
		$(".digitamarketing:hidden").slice(0, loadItem).show();
		window.scrollTo(0, document.body.scrollHeight);
		if ($(".digitamarketing:hidden").length == 0) {
			$(".see-more").css("display", "none");
		}
	});
});
$(document).ready(function () {
	$(".logo").slice(0, defultitem).show();
	$("#seeMore4").click(function (e) {
		e.preventDefault();
		$(".logo:hidden").slice(0, loadItem).show();
		window.scrollTo(0, document.body.scrollHeight);
		if ($(".logo:hidden").length == 0) {
			$(".see-more").css("display", "none");
		}
	});
});
$(document).ready(function () {
	$(".website").slice(0, defultitem).show();
	$("#seeMore5").click(function (e) {
		e.preventDefault();
		$(".website:hidden").slice(0, loadItem).show();
		window.scrollTo(0, document.body.scrollHeight);
		if ($(".website:hidden").length == 0) {
			$(".see-more").css("display", "none");
		}
	});
});
$(window).scroll(function () {
	$(".zoom-in").each(function () {
		var zoomIn = 1,
			zoomOut = 0;

		if (isScrolledIntoView($(this))) {
			$(this).css({
				"-webkit-transform": "scale(" + zoomIn + ")",
				transform: "scale(" + zoomIn + ")",
			});
		} else {
			$(this).css({
				"-webkit-transform": "scale(" + zoomOut + ")",
				transform: "scale(" + zoomOut + ")",
			});
		}
	});
});
