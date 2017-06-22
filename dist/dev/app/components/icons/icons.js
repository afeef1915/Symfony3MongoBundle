"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('angular2/core');
var common_1 = require('angular2/common');
var header_1 = require('../header/header');
var IconsPage = (function () {
    function IconsPage() {
    }
    IconsPage = __decorate([
        core_1.Component({
            selector: 'icons',
            template: "\n    <wrapper>\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <h1 class=\"page-header\">Icons</h1>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-heading\">\n              All available icons\n            </div>\n            <div class=\"panel-body\">\n              <div class=\"row\">\n                <div class=\"fa col-lg-3\">\n                  <p class=\"fa fa-glass\"> fa-glass </p><br/>\n                  <p class=\"fa fa-music\"> fa-music </p><br/>\n                  <p class=\"fa fa-search\"> fa-search </p><br/>\n                  <p class=\"fa fa-envelope-o\"> fa-envelope-o </p><br/>\n                  <p class=\"fa fa-heart\"> fa-heart </p><br/>\n                  <p class=\"fa fa-star\"> fa-star </p><br/>\n                  <p class=\"fa fa-star-o\"> fa-star-o </p><br/>\n                  <p class=\"fa fa-user\"> fa-user </p><br/>\n                  <p class=\"fa fa-film\"> fa-film </p><br/>\n                  <p class=\"fa fa-th-large\"> fa-th-large </p><br/>\n                  <p class=\"fa fa-th\"> fa-th </p><br/>\n                  <p class=\"fa fa-th-list\"> fa-th-list </p><br/>\n                  <p class=\"fa fa-check\"> fa-check </p><br/>\n                  <p class=\"fa fa-times\"> fa-times </p><br/>\n                  <p class=\"fa fa-search-plus\"> fa-search-plus </p><br/>\n                  <p class=\"fa fa-search-minus\"> fa-search-minus </p><br/>\n                  <p class=\"fa fa-power-off\"> fa-power-off </p><br/>\n                  <p class=\"fa fa-signal\"> fa-signal </p><br/>\n                  <p class=\"fa fa-gear\"> fa-gear </p><br/>\n                  <p class=\"fa fa-cog\"> fa-cog </p><br/>\n                  <p class=\"fa fa-trash-o\"> fa-trash-o </p><br/>\n                  <p class=\"fa fa-home\"> fa-home </p><br/>\n                  <p class=\"fa fa-file-o\"> fa-file-o </p><br/>\n                  <p class=\"fa fa-clock-o\"> fa-clock-o </p><br/>\n                  <p class=\"fa fa-road\"> fa-road </p><br/>\n                  <p class=\"fa fa-download\"> fa-download </p><br/>\n                  <p class=\"fa fa-arrow-circle-o-down\"> fa-arrow-circle-o-down </p><br/>\n                  <p class=\"fa fa-arrow-circle-o-up\"> fa-arrow-circle-o-up </p><br/>\n                  <p class=\"fa fa-inbox\"> fa-inbox </p><br/>\n                  <p class=\"fa fa-play-circle-o\"> fa-play-circle-o </p><br/>\n                  <p class=\"fa fa-rotate-right\"> fa-rotate-right </p><br/>\n                  <p class=\"fa fa-repeat\"> fa-repeat </p><br/>\n                  <p class=\"fa fa-refresh\"> fa-refresh </p><br/>\n                  <p class=\"fa fa-list-alt\"> fa-list-alt </p><br/>\n                  <p class=\"fa fa-lock\"> fa-lock </p><br/>\n                  <p class=\"fa fa-flag\"> fa-flag </p><br/>\n                  <p class=\"fa fa-headphones\"> fa-headphones </p><br/>\n                  <p class=\"fa fa-volume-off\"> fa-volume-off </p><br/>\n                  <p class=\"fa fa-volume-down\"> fa-volume-down </p><br/>\n                  <p class=\"fa fa-volume-up\"> fa-volume-up </p><br/>\n                  <p class=\"fa fa-qrcode\"> fa-qrcode </p><br/>\n                  <p class=\"fa fa-barcode\"> fa-barcode </p><br/>\n                  <p class=\"fa fa-tag\"> fa-tag </p><br/>\n                  <p class=\"fa fa-tags\"> fa-tags </p><br/>\n                  <p class=\"fa fa-book\"> fa-book </p><br/>\n                  <p class=\"fa fa-bookmark\"> fa-bookmark </p><br/>\n                  <p class=\"fa fa-print\"> fa-print </p><br/>\n                  <p class=\"fa fa-camera\"> fa-camera </p><br/>\n                  <p class=\"fa fa-font\"> fa-font </p><br/>\n                  <p class=\"fa fa-bold\"> fa-bold </p><br/>\n                  <p class=\"fa fa-italic\"> fa-italic </p><br/>\n                  <p class=\"fa fa-text-height\"> fa-text-height </p><br/>\n                  <p class=\"fa fa-text-width\"> fa-text-width </p><br/>\n                  <p class=\"fa fa-align-left\"> fa-align-left </p><br/>\n                  <p class=\"fa fa-align-center\"> fa-align-center </p><br/>\n                  <p class=\"fa fa-align-right\"> fa-align-right </p><br/>\n                  <p class=\"fa fa-align-justify\"> fa-align-justify </p><br/>\n                  <p class=\"fa fa-list\"> fa-list </p><br/>\n                  <p class=\"fa fa-dedent\"> fa-dedent </p><br/>\n                  <p class=\"fa fa-outdent\"> fa-outdent </p><br/>\n                  <p class=\"fa fa-indent\"> fa-indent </p><br/>\n                  <p class=\"fa fa-video-camera\"> fa-video-camera </p><br/>\n                  <p class=\"fa fa-photo\"> fa-photo </p><br/>\n                  <p class=\"fa fa-image\"> fa-image </p><br/>\n                  <p class=\"fa fa-picture-o\"> fa-picture-o </p><br/>\n                  <p class=\"fa fa-pencil\"> fa-pencil </p><br/>\n                  <p class=\"fa fa-map-marker\"> fa-map-marker </p><br/>\n                  <p class=\"fa fa-adjust\"> fa-adjust </p><br/>\n                  <p class=\"fa fa-tint\"> fa-tint </p><br/>\n                  <p class=\"fa fa-edit\"> fa-edit </p><br/>\n                  <p class=\"fa fa-pencil-square-o\"> fa-pencil-square-o </p><br/>\n                  <p class=\"fa fa-share-square-o\"> fa-share-square-o </p><br/>\n                  <p class=\"fa fa-check-square-o\"> fa-check-square-o </p><br/>\n                  <p class=\"fa fa-arrows\"> fa-arrows </p><br/>\n                  <p class=\"fa fa-step-backward\"> fa-step-backward </p><br/>\n                  <p class=\"fa fa-fast-backward\"> fa-fast-backward </p><br/>\n                  <p class=\"fa fa-backward\"> fa-backward </p><br/>\n                  <p class=\"fa fa-play\"> fa-play </p><br/>\n                  <p class=\"fa fa-pause\"> fa-pause </p><br/>\n                  <p class=\"fa fa-stop\"> fa-stop </p><br/>\n                  <p class=\"fa fa-forward\"> fa-forward </p><br/>\n                  <p class=\"fa fa-fast-forward\"> fa-fast-forward </p><br/>\n                  <p class=\"fa fa-step-forward\"> fa-step-forward </p><br/>\n                  <p class=\"fa fa-eject\"> fa-eject </p><br/>\n                  <p class=\"fa fa-chevron-left\"> fa-chevron-left </p><br/>\n                  <p class=\"fa fa-chevron-right\"> fa-chevron-right </p><br/>\n                  <p class=\"fa fa-plus-circle\"> fa-plus-circle </p><br/>\n                  <p class=\"fa fa-minus-circle\"> fa-minus-circle </p><br/>\n                  <p class=\"fa fa-times-circle\"> fa-times-circle </p><br/>\n                  <p class=\"fa fa-check-circle\"> fa-check-circle </p><br/>\n                  <p class=\"fa fa-question-circle\"> fa-question-circle </p><br/>\n                  <p class=\"fa fa-info-circle\"> fa-info-circle </p><br/>\n                  <p class=\"fa fa-crosshairs\"> fa-crosshairs </p><br/>\n                  <p class=\"fa fa-times-circle-o\"> fa-times-circle-o </p><br/>\n                  <p class=\"fa fa-check-circle-o\"> fa-check-circle-o </p><br/>\n                  <p class=\"fa fa-ban\"> fa-ban </p><br/>\n                  <p class=\"fa fa-arrow-left\"> fa-arrow-left </p><br/>\n                  <p class=\"fa fa-arrow-right\"> fa-arrow-right </p><br/>\n                  <p class=\"fa fa-arrow-up\"> fa-arrow-up </p><br/>\n                  <p class=\"fa fa-arrow-down\"> fa-arrow-down </p><br/>\n                  <p class=\"fa fa-mail-forward\"> fa-mail-forward </p><br/>\n                  <p class=\"fa fa-share\"> fa-share </p><br/>\n                  <p class=\"fa fa-expand\"> fa-expand </p><br/>\n                  <p class=\"fa fa-compress\"> fa-compress </p><br/>\n                  <p class=\"fa fa-plus\"> fa-plus </p><br/>\n                  <p class=\"fa fa-minus\"> fa-minus </p><br/>\n                  <p class=\"fa fa-asterisk\"> fa-asterisk </p><br/>\n                  <p class=\"fa fa-exclamation-circle\"> fa-exclamation-circle </p><br/>\n                  <p class=\"fa fa-gift\"> fa-gift </p><br/>\n                  <p class=\"fa fa-leaf\"> fa-leaf </p><br/>\n                  <p class=\"fa fa-fire\"> fa-fire </p><br/>\n                  <p class=\"fa fa-eye\"> fa-eye </p><br/>\n                  <p class=\"fa fa-eye-slash\"> fa-eye-slash </p><br/>\n                  <p class=\"fa fa-warning\"> fa-warning </p><br/>\n                  <p class=\"fa fa-exclamation-triangle\"> fa-exclamation-triangle </p><br/>\n                  <p class=\"fa fa-plane\"> fa-plane </p><br/>\n                  <p class=\"fa fa-calendar\"> fa-calendar </p><br/>\n                  <p class=\"fa fa-random\"> fa-random </p><br/>\n                  <p class=\"fa fa-comment\"> fa-comment </p><br/>\n                  <p class=\"fa fa-magnet\"> fa-magnet </p><br/>\n                  <p class=\"fa fa-chevron-up\"> fa-chevron-up </p><br/>\n                  <p class=\"fa fa-chevron-down\"> fa-chevron-down </p><br/>\n                  <p class=\"fa fa-retweet\"> fa-retweet </p><br/>\n                  <p class=\"fa fa-shopping-cart\"> fa-shopping-cart </p><br/>\n                  <p class=\"fa fa-folder\"> fa-folder </p><br/>\n                  <p class=\"fa fa-folder-open\"> fa-folder-open </p><br/>\n                </div>\n                <!-- /.col-lg-6 (nested) -->\n                <div class=\"fa col-lg-3\">\n                  <p class=\"fa fa-arrows-v\"> fa-arrows-v </p><br/>\n                  <p class=\"fa fa-arrows-h\"> fa-arrows-h </p><br/>\n                  <p class=\"fa fa-bar-chart-o\"> fa-bar-chart-o </p><br/>\n                  <p class=\"fa fa-twitter-square\"> fa-twitter-square </p><br/>\n                  <p class=\"fa fa-facebook-square\"> fa-facebook-square </p><br/>\n                  <p class=\"fa fa-camera-retro\"> fa-camera-retro </p><br/>\n                  <p class=\"fa fa-key\"> fa-key </p><br/>\n                  <p class=\"fa fa-gears\"> fa-gears </p><br/>\n                  <p class=\"fa fa-cogs\"> fa-cogs </p><br/>\n                  <p class=\"fa fa-comments\"> fa-comments </p><br/>\n                  <p class=\"fa fa-thumbs-o-up\"> fa-thumbs-o-up </p><br/>\n                  <p class=\"fa fa-thumbs-o-down\"> fa-thumbs-o-down </p><br/>\n                  <p class=\"fa fa-star-half\"> fa-star-half </p><br/>\n                  <p class=\"fa fa-heart-o\"> fa-heart-o </p><br/>\n                  <p class=\"fa fa-sign-out\"> fa-sign-out </p><br/>\n                  <p class=\"fa fa-linkedin-square\"> fa-linkedin-square </p><br/>\n                  <p class=\"fa fa-thumb-tack\"> fa-thumb-tack </p><br/>\n                  <p class=\"fa fa-external-link\"> fa-external-link </p><br/>\n                  <p class=\"fa fa-sign-in\"> fa-sign-in </p><br/>\n                  <p class=\"fa fa-trophy\"> fa-trophy </p><br/>\n                  <p class=\"fa fa-github-square\"> fa-github-square </p><br/>\n                  <p class=\"fa fa-upload\"> fa-upload </p><br/>\n                  <p class=\"fa fa-lemon-o\"> fa-lemon-o </p><br/>\n                  <p class=\"fa fa-phone\"> fa-phone </p><br/>\n                  <p class=\"fa fa-square-o\"> fa-square-o </p><br/>\n                  <p class=\"fa fa-bookmark-o\"> fa-bookmark-o </p><br/>\n                  <p class=\"fa fa-phone-square\"> fa-phone-square </p><br/>\n                  <p class=\"fa fa-twitter\"> fa-twitter </p><br/>\n                  <p class=\"fa fa-facebook\"> fa-facebook </p><br/>\n                  <p class=\"fa fa-github\"> fa-github </p><br/>\n                  <p class=\"fa fa-unlock\"> fa-unlock </p><br/>\n                  <p class=\"fa fa-credit-card\"> fa-credit-card </p><br/>\n                  <p class=\"fa fa-rss\"> fa-rss </p><br/>\n                  <p class=\"fa fa-hdd-o\"> fa-hdd-o </p><br/>\n                  <p class=\"fa fa-bullhorn\"> fa-bullhorn </p><br/>\n                  <p class=\"fa fa-bell\"> fa-bell </p><br/>\n                  <p class=\"fa fa-certificate\"> fa-certificate </p><br/>\n                  <p class=\"fa fa-hand-o-right\"> fa-hand-o-right </p><br/>\n                  <p class=\"fa fa-hand-o-left\"> fa-hand-o-left </p><br/>\n                  <p class=\"fa fa-hand-o-up\"> fa-hand-o-up </p><br/>\n                  <p class=\"fa fa-hand-o-down\"> fa-hand-o-down </p><br/>\n                  <p class=\"fa fa-arrow-circle-left\"> fa-arrow-circle-left </p><br/>\n                  <p class=\"fa fa-arrow-circle-right\"> fa-arrow-circle-right </p><br/>\n                  <p class=\"fa fa-arrow-circle-up\"> fa-arrow-circle-up </p><br/>\n                  <p class=\"fa fa-arrow-circle-down\"> fa-arrow-circle-down </p><br/>\n                  <p class=\"fa fa-globe\"> fa-globe </p><br/>\n                  <p class=\"fa fa-wrench\"> fa-wrench </p><br/>\n                  <p class=\"fa fa-tasks\"> fa-tasks </p><br/>\n                  <p class=\"fa fa-filter\"> fa-filter </p><br/>\n                  <p class=\"fa fa-briefcase\"> fa-briefcase </p><br/>\n                  <p class=\"fa fa-arrows-alt\"> fa-arrows-alt </p><br/>\n                  <p class=\"fa fa-group\"> fa-group </p><br/>\n                  <p class=\"fa fa-users\"> fa-users </p><br/>\n                  <p class=\"fa fa-chain\"> fa-chain </p><br/>\n                  <p class=\"fa fa-link\"> fa-link </p><br/>\n                  <p class=\"fa fa-cloud\"> fa-cloud </p><br/>\n                  <p class=\"fa fa-flask\"> fa-flask </p><br/>\n                  <p class=\"fa fa-cut\"> fa-cut </p><br/>\n                  <p class=\"fa fa-scissors\"> fa-scissors </p><br/>\n                  <p class=\"fa fa-copy\"> fa-copy </p><br/>\n                  <p class=\"fa fa-files-o\"> fa-files-o </p><br/>\n                  <p class=\"fa fa-paperclip\"> fa-paperclip </p><br/>\n                  <p class=\"fa fa-save\"> fa-save </p><br/>\n                  <p class=\"fa fa-floppy-o\"> fa-floppy-o </p><br/>\n                  <p class=\"fa fa-square\"> fa-square </p><br/>\n                  <p class=\"fa fa-navicon\"> fa-navicon </p><br/>\n                  <p class=\"fa fa-reorder\"> fa-reorder </p><br/>\n                  <p class=\"fa fa-bars\"> fa-bars </p><br/>\n                  <p class=\"fa fa-list-ul\"> fa-list-ul </p><br/>\n                  <p class=\"fa fa-list-ol\"> fa-list-ol </p><br/>\n                  <p class=\"fa fa-strikethrough\"> fa-strikethrough </p><br/>\n                  <p class=\"fa fa-underline\"> fa-underline </p><br/>\n                  <p class=\"fa fa-table\"> fa-table </p><br/>\n                  <p class=\"fa fa-magic\"> fa-magic </p><br/>\n                  <p class=\"fa fa-truck\"> fa-truck </p><br/>\n                  <p class=\"fa fa-pinterest\"> fa-pinterest </p><br/>\n                  <p class=\"fa fa-pinterest-square\"> fa-pinterest-square </p><br/>\n                  <p class=\"fa fa-google-plus-square\"> fa-google-plus-square </p><br/>\n                  <p class=\"fa fa-google-plus\"> fa-google-plus </p><br/>\n                  <p class=\"fa fa-money\"> fa-money </p><br/>\n                  <p class=\"fa fa-caret-down\"> fa-caret-down </p><br/>\n                  <p class=\"fa fa-caret-up\"> fa-caret-up </p><br/>\n                  <p class=\"fa fa-caret-left\"> fa-caret-left </p><br/>\n                  <p class=\"fa fa-caret-right\"> fa-caret-right </p><br/>\n                  <p class=\"fa fa-columns\"> fa-columns </p><br/>\n                  <p class=\"fa fa-unsorted\"> fa-unsorted </p><br/>\n                  <p class=\"fa fa-sort\"> fa-sort </p><br/>\n                  <p class=\"fa fa-sort-down\"> fa-sort-down </p><br/>\n                  <p class=\"fa fa-sort-desc\"> fa-sort-desc </p><br/>\n                  <p class=\"fa fa-sort-up\"> fa-sort-up </p><br/>\n                  <p class=\"fa fa-sort-asc\"> fa-sort-asc </p><br/>\n                  <p class=\"fa fa-envelope\"> fa-envelope </p><br/>\n                  <p class=\"fa fa-linkedin\"> fa-linkedin </p><br/>\n                  <p class=\"fa fa-rotate-left\"> fa-rotate-left </p><br/>\n                  <p class=\"fa fa-undo\"> fa-undo </p><br/>\n                  <p class=\"fa fa-legal\"> fa-legal </p><br/>\n                  <p class=\"fa fa-gavel\"> fa-gavel </p><br/>\n                  <p class=\"fa fa-dashboard\"> fa-dashboard </p><br/>\n                  <p class=\"fa fa-tachometer\"> fa-tachometer </p><br/>\n                  <p class=\"fa fa-comment-o\"> fa-comment-o </p><br/>\n                  <p class=\"fa fa-comments-o\"> fa-comments-o </p><br/>\n                  <p class=\"fa fa-flash\"> fa-flash </p><br/>\n                  <p class=\"fa fa-bolt\"> fa-bolt </p><br/>\n                  <p class=\"fa fa-sitemap\"> fa-sitemap </p><br/>\n                  <p class=\"fa fa-umbrella\"> fa-umbrella </p><br/>\n                  <p class=\"fa fa-paste\"> fa-paste </p><br/>\n                  <p class=\"fa fa-clipboard\"> fa-clipboard </p><br/>\n                  <p class=\"fa fa-lightbulb-o\"> fa-lightbulb-o </p><br/>\n                  <p class=\"fa fa-exchange\"> fa-exchange </p><br/>\n                  <p class=\"fa fa-cloud-download\"> fa-cloud-download </p><br/>\n                  <p class=\"fa fa-cloud-upload\"> fa-cloud-upload </p><br/>\n                  <p class=\"fa fa-user-md\"> fa-user-md </p><br/>\n                  <p class=\"fa fa-stethoscope\"> fa-stethoscope </p><br/>\n                  <p class=\"fa fa-suitcase\"> fa-suitcase </p><br/>\n                  <p class=\"fa fa-bell-o\"> fa-bell-o </p><br/>\n                  <p class=\"fa fa-coffee\"> fa-coffee </p><br/>\n                  <p class=\"fa fa-cutlery\"> fa-cutlery </p><br/>\n                  <p class=\"fa fa-file-text-o\"> fa-file-text-o </p><br/>\n                  <p class=\"fa fa-building-o\"> fa-building-o </p><br/>\n                  <p class=\"fa fa-hospital-o\"> fa-hospital-o </p><br/>\n                  <p class=\"fa fa-ambulance\"> fa-ambulance </p><br/>\n                  <p class=\"fa fa-medkit\"> fa-medkit </p><br/>\n                  <p class=\"fa fa-fighter-jet\"> fa-fighter-jet </p><br/>\n                  <p class=\"fa fa-beer\"> fa-beer </p><br/>\n                  <p class=\"fa fa-h-square\"> fa-h-square </p><br/>\n                  <p class=\"fa fa-plus-square\"> fa-plus-square </p><br/>\n                </div>\n                <div class=\"fa col-lg-3\">\n                  <p class=\"fa fa-angle-double-left\"> fa-angle-double-left </p><br/>\n                  <p class=\"fa fa-angle-double-right\"> fa-angle-double-right </p><br/>\n                  <p class=\"fa fa-angle-double-up\"> fa-angle-double-up </p><br/>\n                  <p class=\"fa fa-angle-double-down\"> fa-angle-double-down </p><br/>\n                  <p class=\"fa fa-angle-left\"> fa-angle-left </p><br/>\n                  <p class=\"fa fa-angle-right\"> fa-angle-right </p><br/>\n                  <p class=\"fa fa-angle-up\"> fa-angle-up </p><br/>\n                  <p class=\"fa fa-angle-down\"> fa-angle-down </p><br/>\n                  <p class=\"fa fa-desktop\"> fa-desktop </p><br/>\n                  <p class=\"fa fa-laptop\"> fa-laptop </p><br/>\n                  <p class=\"fa fa-tablet\"> fa-tablet </p><br/>\n                  <p class=\"fa fa-mobile-phone\"> fa-mobile-phone </p><br/>\n                  <p class=\"fa fa-mobile\"> fa-mobile </p><br/>\n                  <p class=\"fa fa-circle-o\"> fa-circle-o </p><br/>\n                  <p class=\"fa fa-quote-left\"> fa-quote-left </p><br/>\n                  <p class=\"fa fa-quote-right\"> fa-quote-right </p><br/>\n                  <p class=\"fa fa-spinner\"> fa-spinner </p><br/>\n                  <p class=\"fa fa-circle\"> fa-circle </p><br/>\n                  <p class=\"fa fa-mail-reply\"> fa-mail-reply </p><br/>\n                  <p class=\"fa fa-reply\"> fa-reply </p><br/>\n                  <p class=\"fa fa-github-alt\"> fa-github-alt </p><br/>\n                  <p class=\"fa fa-folder-o\"> fa-folder-o </p><br/>\n                  <p class=\"fa fa-folder-open-o\"> fa-folder-open-o </p><br/>\n                  <p class=\"fa fa-smile-o\"> fa-smile-o </p><br/>\n                  <p class=\"fa fa-frown-o\"> fa-frown-o </p><br/>\n                  <p class=\"fa fa-meh-o\"> fa-meh-o </p><br/>\n                  <p class=\"fa fa-gamepad\"> fa-gamepad </p><br/>\n                  <p class=\"fa fa-keyboard-o\"> fa-keyboard-o </p><br/>\n                  <p class=\"fa fa-flag-o\"> fa-flag-o </p><br/>\n                  <p class=\"fa fa-flag-checkered\"> fa-flag-checkered </p><br/>\n                  <p class=\"fa fa-terminal\"> fa-terminal </p><br/>\n                  <p class=\"fa fa-code\"> fa-code </p><br/>\n                  <p class=\"fa fa-mail-reply-all\"> fa-mail-reply-all </p><br/>\n                  <p class=\"fa fa-reply-all\"> fa-reply-all </p><br/>\n                  <p class=\"fa fa-star-half-empty\"> fa-star-half-empty </p><br/>\n                  <p class=\"fa fa-star-half-full\"> fa-star-half-full </p><br/>\n                  <p class=\"fa fa-star-half-o\"> fa-star-half-o </p><br/>\n                  <p class=\"fa fa-location-arrow\"> fa-location-arrow </p><br/>\n                  <p class=\"fa fa-crop\"> fa-crop </p><br/>\n                  <p class=\"fa fa-code-fork\"> fa-code-fork </p><br/>\n                  <p class=\"fa fa-unlink\"> fa-unlink </p><br/>\n                  <p class=\"fa fa-chain-broken\"> fa-chain-broken </p><br/>\n                  <p class=\"fa fa-question\"> fa-question </p><br/>\n                  <p class=\"fa fa-info\"> fa-info </p><br/>\n                  <p class=\"fa fa-exclamation\"> fa-exclamation </p><br/>\n                  <p class=\"fa fa-superscript\"> fa-superscript </p><br/>\n                  <p class=\"fa fa-subscript\"> fa-subscript </p><br/>\n                  <p class=\"fa fa-eraser\"> fa-eraser </p><br/>\n                  <p class=\"fa fa-puzzle-piece\"> fa-puzzle-piece </p><br/>\n                  <p class=\"fa fa-microphone\"> fa-microphone </p><br/>\n                  <p class=\"fa fa-microphone-slash\"> fa-microphone-slash </p><br/>\n                  <p class=\"fa fa-shield\"> fa-shield </p><br/>\n                  <p class=\"fa fa-calendar-o\"> fa-calendar-o </p><br/>\n                  <p class=\"fa fa-fire-extinguisher\"> fa-fire-extinguisher </p><br/>\n                  <p class=\"fa fa-rocket\"> fa-rocket </p><br/>\n                  <p class=\"fa fa-maxcdn\"> fa-maxcdn </p><br/>\n                  <p class=\"fa fa-chevron-circle-left\"> fa-chevron-circle-left </p><br/>\n                  <p class=\"fa fa-chevron-circle-right\"> fa-chevron-circle-right </p><br/>\n                  <p class=\"fa fa-chevron-circle-up\"> fa-chevron-circle-up </p><br/>\n                  <p class=\"fa fa-chevron-circle-down\"> fa-chevron-circle-down </p><br/>\n                  <p class=\"fa fa-html5\"> fa-html5 </p><br/>\n                  <p class=\"fa fa-css3\"> fa-css3 </p><br/>\n                  <p class=\"fa fa-anchor\"> fa-anchor </p><br/>\n                  <p class=\"fa fa-unlock-alt\"> fa-unlock-alt </p><br/>\n                  <p class=\"fa fa-bullseye\"> fa-bullseye </p><br/>\n                  <p class=\"fa fa-ellipsis-h\"> fa-ellipsis-h </p><br/>\n                  <p class=\"fa fa-ellipsis-v\"> fa-ellipsis-v </p><br/>\n                  <p class=\"fa fa-rss-square\"> fa-rss-square </p><br/>\n                  <p class=\"fa fa-play-circle\"> fa-play-circle </p><br/>\n                  <p class=\"fa fa-ticket\"> fa-ticket </p><br/>\n                  <p class=\"fa fa-minus-square\"> fa-minus-square </p><br/>\n                  <p class=\"fa fa-minus-square-o\"> fa-minus-square-o </p><br/>\n                  <p class=\"fa fa-level-up\"> fa-level-up </p><br/>\n                  <p class=\"fa fa-level-down\"> fa-level-down </p><br/>\n                  <p class=\"fa fa-check-square\"> fa-check-square </p><br/>\n                  <p class=\"fa fa-pencil-square\"> fa-pencil-square </p><br/>\n                  <p class=\"fa fa-external-link-square\"> fa-external-link-square </p><br/>\n                  <p class=\"fa fa-share-square\"> fa-share-square </p><br/>\n                  <p class=\"fa fa-compass\"> fa-compass </p><br/>\n                  <p class=\"fa fa-toggle-down\"> fa-toggle-down </p><br/>\n                  <p class=\"fa fa-caret-square-o-down\"> fa-caret-square-o-down </p><br/>\n                  <p class=\"fa fa-toggle-up\"> fa-toggle-up </p><br/>\n                  <p class=\"fa fa-caret-square-o-up\"> fa-caret-square-o-up </p><br/>\n                  <p class=\"fa fa-toggle-right\"> fa-toggle-right </p><br/>\n                  <p class=\"fa fa-caret-square-o-right\"> fa-caret-square-o-right </p><br/>\n                  <p class=\"fa fa-euro\"> fa-euro </p><br/>\n                  <p class=\"fa fa-eur\"> fa-eur </p><br/>\n                  <p class=\"fa fa-gbp\"> fa-gbp </p><br/>\n                  <p class=\"fa fa-dollar\"> fa-dollar </p><br/>\n                  <p class=\"fa fa-usd\"> fa-usd </p><br/>\n                  <p class=\"fa fa-rupee\"> fa-rupee </p><br/>\n                  <p class=\"fa fa-inr\"> fa-inr </p><br/>\n                  <p class=\"fa fa-cny\"> fa-cny </p><br/>\n                  <p class=\"fa fa-rmb\"> fa-rmb </p><br/>\n                  <p class=\"fa fa-yen\"> fa-yen </p><br/>\n                  <p class=\"fa fa-jpy\"> fa-jpy </p><br/>\n                  <p class=\"fa fa-ruble\"> fa-ruble </p><br/>\n                  <p class=\"fa fa-rouble\"> fa-rouble </p><br/>\n                  <p class=\"fa fa-rub\"> fa-rub </p><br/>\n                  <p class=\"fa fa-won\"> fa-won </p><br/>\n                  <p class=\"fa fa-krw\"> fa-krw </p><br/>\n                  <p class=\"fa fa-bitcoin\"> fa-bitcoin </p><br/>\n                  <p class=\"fa fa-btc\"> fa-btc </p><br/>\n                  <p class=\"fa fa-file\"> fa-file </p><br/>\n                  <p class=\"fa fa-file-text\"> fa-file-text </p><br/>\n                  <p class=\"fa fa-sort-alpha-asc\"> fa-sort-alpha-asc </p><br/>\n                  <p class=\"fa fa-sort-alpha-desc\"> fa-sort-alpha-desc </p><br/>\n                  <p class=\"fa fa-sort-amount-asc\"> fa-sort-amount-asc </p><br/>\n                  <p class=\"fa fa-sort-amount-desc\"> fa-sort-amount-desc </p><br/>\n                  <p class=\"fa fa-sort-numeric-asc\"> fa-sort-numeric-asc </p><br/>\n                  <p class=\"fa fa-sort-numeric-desc\"> fa-sort-numeric-desc </p><br/>\n                  <p class=\"fa fa-thumbs-up\"> fa-thumbs-up </p><br/>\n                  <p class=\"fa fa-thumbs-down\"> fa-thumbs-down </p><br/>\n                  <p class=\"fa fa-youtube-square\"> fa-youtube-square </p><br/>\n                  <p class=\"fa fa-youtube\"> fa-youtube </p><br/>\n                  <p class=\"fa fa-xing\"> fa-xing </p><br/>\n                  <p class=\"fa fa-xing-square\"> fa-xing-square </p><br/>\n                  <p class=\"fa fa-youtube-play\"> fa-youtube-play </p><br/>\n                  <p class=\"fa fa-dropbox\"> fa-dropbox </p><br/>\n                  <p class=\"fa fa-stack-overflow\"> fa-stack-overflow </p><br/>\n                  <p class=\"fa fa-instagram\"> fa-instagram </p><br/>\n                  <p class=\"fa fa-flickr\"> fa-flickr </p><br/>\n                  <p class=\"fa fa-adn\"> fa-adn </p><br/>\n                  <p class=\"fa fa-bitbucket\"> fa-bitbucket </p><br/>\n                  <p class=\"fa fa-bitbucket-square\"> fa-bitbucket-square </p><br/>\n                  <p class=\"fa fa-tumblr\"> fa-tumblr </p><br/>\n                </div>\n                <div class=\"fa col-lg-3\">\n                  <p class=\"fa fa-tumblr-square\"> fa-tumblr-square </p><br/>\n                  <p class=\"fa fa-long-arrow-down\"> fa-long-arrow-down </p><br/>\n                  <p class=\"fa fa-long-arrow-up\"> fa-long-arrow-up </p><br/>\n                  <p class=\"fa fa-long-arrow-left\"> fa-long-arrow-left </p><br/>\n                  <p class=\"fa fa-long-arrow-right\"> fa-long-arrow-right </p><br/>\n                  <p class=\"fa fa-apple\"> fa-apple </p><br/>\n                  <p class=\"fa fa-windows\"> fa-windows </p><br/>\n                  <p class=\"fa fa-android\"> fa-android </p><br/>\n                  <p class=\"fa fa-linux\"> fa-linux </p><br/>\n                  <p class=\"fa fa-dribbble\"> fa-dribbble </p><br/>\n                  <p class=\"fa fa-skype\"> fa-skype </p><br/>\n                  <p class=\"fa fa-foursquare\"> fa-foursquare </p><br/>\n                  <p class=\"fa fa-trello\"> fa-trello </p><br/>\n                  <p class=\"fa fa-female\"> fa-female </p><br/>\n                  <p class=\"fa fa-male\"> fa-male </p><br/>\n                  <p class=\"fa fa-gittip\"> fa-gittip </p><br/>\n                  <p class=\"fa fa-sun-o\"> fa-sun-o </p><br/>\n                  <p class=\"fa fa-moon-o\"> fa-moon-o </p><br/>\n                  <p class=\"fa fa-archive\"> fa-archive </p><br/>\n                  <p class=\"fa fa-bug\"> fa-bug </p><br/>\n                  <p class=\"fa fa-vk\"> fa-vk </p><br/>\n                  <p class=\"fa fa-weibo\"> fa-weibo </p><br/>\n                  <p class=\"fa fa-renren\"> fa-renren </p><br/>\n                  <p class=\"fa fa-pagelines\"> fa-pagelines </p><br/>\n                  <p class=\"fa fa-stack-exchange\"> fa-stack-exchange </p><br/>\n                  <p class=\"fa fa-arrow-circle-o-right\"> fa-arrow-circle-o-right </p><br/>\n                  <p class=\"fa fa-arrow-circle-o-left\"> fa-arrow-circle-o-left </p><br/>\n                  <p class=\"fa fa-toggle-left\"> fa-toggle-left </p><br/>\n                  <p class=\"fa fa-caret-square-o-left\"> fa-caret-square-o-left </p><br/>\n                  <p class=\"fa fa-dot-circle-o\"> fa-dot-circle-o </p><br/>\n                  <p class=\"fa fa-wheelchair\"> fa-wheelchair </p><br/>\n                  <p class=\"fa fa-vimeo-square\"> fa-vimeo-square </p><br/>\n                  <p class=\"fa fa-turkish-lira\"> fa-turkish-lira </p><br/>\n                  <p class=\"fa fa-try\"> fa-try </p><br/>\n                  <p class=\"fa fa-plus-square-o\"> fa-plus-square-o </p><br/>\n                  <p class=\"fa fa-space-shuttle\"> fa-space-shuttle </p><br/>\n                  <p class=\"fa fa-slack\"> fa-slack </p><br/>\n                  <p class=\"fa fa-envelope-square\"> fa-envelope-square </p><br/>\n                  <p class=\"fa fa-wordpress\"> fa-wordpress </p><br/>\n                  <p class=\"fa fa-openid\"> fa-openid </p><br/>\n                  <p class=\"fa fa-institution\"> fa-institution </p><br/>\n                  <p class=\"fa fa-bank\"> fa-bank </p><br/>\n                  <p class=\"fa fa-university\"> fa-university </p><br/>\n                  <p class=\"fa fa-mortar-board\"> fa-mortar-board </p><br/>\n                  <p class=\"fa fa-graduation-cap\"> fa-graduation-cap </p><br/>\n                  <p class=\"fa fa-yahoo\"> fa-yahoo </p><br/>\n                  <p class=\"fa fa-google\"> fa-google </p><br/>\n                  <p class=\"fa fa-reddit\"> fa-reddit </p><br/>\n                  <p class=\"fa fa-reddit-square\"> fa-reddit-square </p><br/>\n                  <p class=\"fa fa-stumbleupon-circle\"> fa-stumbleupon-circle </p><br/>\n                  <p class=\"fa fa-stumbleupon\"> fa-stumbleupon </p><br/>\n                  <p class=\"fa fa-delicious\"> fa-delicious </p><br/>\n                  <p class=\"fa fa-digg\"> fa-digg </p><br/>\n                  <p class=\"fa fa-pied-piper-square\"> fa-pied-piper-square </p><br/>\n                  <p class=\"fa fa-pied-piper\"> fa-pied-piper </p><br/>\n                  <p class=\"fa fa-pied-piper-alt\"> fa-pied-piper-alt </p><br/>\n                  <p class=\"fa fa-drupal\"> fa-drupal </p><br/>\n                  <p class=\"fa fa-joomla\"> fa-joomla </p><br/>\n                  <p class=\"fa fa-language\"> fa-language </p><br/>\n                  <p class=\"fa fa-fax\"> fa-fax </p><br/>\n                  <p class=\"fa fa-building\"> fa-building </p><br/>\n                  <p class=\"fa fa-child\"> fa-child </p><br/>\n                  <p class=\"fa fa-paw\"> fa-paw </p><br/>\n                  <p class=\"fa fa-spoon\"> fa-spoon </p><br/>\n                  <p class=\"fa fa-cube\"> fa-cube </p><br/>\n                  <p class=\"fa fa-cubes\"> fa-cubes </p><br/>\n                  <p class=\"fa fa-behance\"> fa-behance </p><br/>\n                  <p class=\"fa fa-behance-square\"> fa-behance-square </p><br/>\n                  <p class=\"fa fa-steam\"> fa-steam </p><br/>\n                  <p class=\"fa fa-steam-square\"> fa-steam-square </p><br/>\n                  <p class=\"fa fa-recycle\"> fa-recycle </p><br/>\n                  <p class=\"fa fa-automobile\"> fa-automobile </p><br/>\n                  <p class=\"fa fa-car\"> fa-car </p><br/>\n                  <p class=\"fa fa-cab\"> fa-cab </p><br/>\n                  <p class=\"fa fa-taxi\"> fa-taxi </p><br/>\n                  <p class=\"fa fa-tree\"> fa-tree </p><br/>\n                  <p class=\"fa fa-spotify\"> fa-spotify </p><br/>\n                  <p class=\"fa fa-deviantart\"> fa-deviantart </p><br/>\n                  <p class=\"fa fa-soundcloud\"> fa-soundcloud </p><br/>\n                  <p class=\"fa fa-database\"> fa-database </p><br/>\n                  <p class=\"fa fa-file-pdf-o\"> fa-file-pdf-o </p><br/>\n                  <p class=\"fa fa-file-word-o\"> fa-file-word-o </p><br/>\n                  <p class=\"fa fa-file-excel-o\"> fa-file-excel-o </p><br/>\n                  <p class=\"fa fa-file-powerpoint-o\"> fa-file-powerpoint-o </p><br/>\n                  <p class=\"fa fa-file-photo-o\"> fa-file-photo-o </p><br/>\n                  <p class=\"fa fa-file-picture-o\"> fa-file-picture-o </p><br/>\n                  <p class=\"fa fa-file-image-o\"> fa-file-image-o </p><br/>\n                  <p class=\"fa fa-file-zip-o\"> fa-file-zip-o </p><br/>\n                  <p class=\"fa fa-file-archive-o\"> fa-file-archive-o </p><br/>\n                  <p class=\"fa fa-file-sound-o\"> fa-file-sound-o </p><br/>\n                  <p class=\"fa fa-file-audio-o\"> fa-file-audio-o </p><br/>\n                  <p class=\"fa fa-file-movie-o\"> fa-file-movie-o </p><br/>\n                  <p class=\"fa fa-file-video-o\"> fa-file-video-o </p><br/>\n                  <p class=\"fa fa-file-code-o\"> fa-file-code-o </p><br/>\n                  <p class=\"fa fa-vine\"> fa-vine </p><br/>\n                  <p class=\"fa fa-codepen\"> fa-codepen </p><br/>\n                  <p class=\"fa fa-jsfiddle\"> fa-jsfiddle </p><br/>\n                  <p class=\"fa fa-life-bouy\"> fa-life-bouy </p><br/>\n                  <p class=\"fa fa-life-saver\"> fa-life-saver </p><br/>\n                  <p class=\"fa fa-support\"> fa-support </p><br/>\n                  <p class=\"fa fa-life-ring\"> fa-life-ring </p><br/>\n                  <p class=\"fa fa-circle-o-notch\"> fa-circle-o-notch </p><br/>\n                  <p class=\"fa fa-ra\"> fa-ra </p><br/>\n                  <p class=\"fa fa-rebel\"> fa-rebel </p><br/>\n                  <p class=\"fa fa-ge\"> fa-ge </p><br/>\n                  <p class=\"fa fa-empire\"> fa-empire </p><br/>\n                  <p class=\"fa fa-git-square\"> fa-git-square </p><br/>\n                  <p class=\"fa fa-git\"> fa-git </p><br/>\n                  <p class=\"fa fa-hacker-news\"> fa-hacker-news </p><br/>\n                  <p class=\"fa fa-tencent-weibo\"> fa-tencent-weibo </p><br/>\n                  <p class=\"fa fa-qq\"> fa-qq </p><br/>\n                  <p class=\"fa fa-wechat\"> fa-wechat </p><br/>\n                  <p class=\"fa fa-weixin\"> fa-weixin </p><br/>\n                  <p class=\"fa fa-send\"> fa-send </p><br/>\n                  <p class=\"fa fa-paper-plane\"> fa-paper-plane </p><br/>\n                  <p class=\"fa fa-send-o\"> fa-send-o </p><br/>\n                  <p class=\"fa fa-paper-plane-o\"> fa-paper-plane-o </p><br/>\n                  <p class=\"fa fa-history\"> fa-history </p><br/>\n                  <p class=\"fa fa-circle-thin\"> fa-circle-thin </p><br/>\n                  <p class=\"fa fa-header\"> fa-header </p><br/>\n                  <p class=\"fa fa-paragraph\"> fa-paragraph </p><br/>\n                  <p class=\"fa fa-sliders\"> fa-sliders </p><br/>\n                  <p class=\"fa fa-share-alt\"> fa-share-alt </p><br/>\n                  <p class=\"fa fa-share-alt-square\"> fa-share-alt-square </p><br/>\n                  <p class=\"fa fa-bomb\"> fa-bomb </p><br/>\n                </div>\n                <!-- /.col-lg-6 (nested) -->\n              </div>\n              <!-- /.row (nested) -->\n            </div>\n            <!-- /.panel-body -->\n          </div>\n          <!-- /.panel -->\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n    </wrapper>\n  ",
            styles: ["\n\n  "],
            directives: [header_1.WrapperCmp, common_1.CORE_DIRECTIVES]
        }), 
        __metadata('design:paramtypes', [])
    ], IconsPage);
    return IconsPage;
}());
exports.IconsPage = IconsPage;

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL2ljb25zL2ljb25zLnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQSxxQkFBd0IsZUFBZSxDQUFDLENBQUE7QUFDeEMsdUJBQThCLGlCQUFpQixDQUFDLENBQUE7QUFDaEQsdUJBQXlCLGtCQUFrQixDQUFDLENBQUE7QUFzaUI1QztJQUFBO0lBQ0EsQ0FBQztJQXJpQkQ7UUFBQyxnQkFBUyxDQUFDO1lBQ1QsUUFBUSxFQUFFLE9BQU87WUFDakIsUUFBUSxFQUFFLDZwb0NBNGhCVDtZQUNELE1BQU0sRUFBRSxDQUFDLFFBRVIsQ0FBQztZQUNGLFVBQVUsRUFBRSxDQUFDLG1CQUFVLEVBQUUsd0JBQWUsQ0FBQztTQUMxQyxDQUFDOztpQkFBQTtJQUVGLGdCQUFDO0FBQUQsQ0FEQSxBQUNDLElBQUE7QUFEWSxpQkFBUyxZQUNyQixDQUFBIiwiZmlsZSI6ImFwcC9jb21wb25lbnRzL2ljb25zL2ljb25zLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHtDb21wb25lbnR9IGZyb20gJ2FuZ3VsYXIyL2NvcmUnO1xyXG5pbXBvcnQge0NPUkVfRElSRUNUSVZFU30gZnJvbSAnYW5ndWxhcjIvY29tbW9uJztcclxuaW1wb3J0IHtXcmFwcGVyQ21wfSBmcm9tICcuLi9oZWFkZXIvaGVhZGVyJztcclxuXHJcbkBDb21wb25lbnQoe1xyXG4gIHNlbGVjdG9yOiAnaWNvbnMnLFxyXG4gIHRlbXBsYXRlVXJsOiAnYXBwL2NvbXBvbmVudHMvaWNvbnMvaWNvbnMuaHRtbCcsXHJcbiAgc3R5bGVVcmxzOiBbJ2FwcC9jb21wb25lbnRzL2ljb25zL2ljb25zLmNzcyddLFxyXG4gIGRpcmVjdGl2ZXM6IFtXcmFwcGVyQ21wLCBDT1JFX0RJUkVDVElWRVNdXHJcbn0pXHJcbmV4cG9ydCBjbGFzcyBJY29uc1BhZ2Uge1xyXG59XHJcbiJdfQ==
