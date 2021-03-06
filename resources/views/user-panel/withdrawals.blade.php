@extends('includes.dashboard-header')
@section('title')
    CRYPTOWEALTH LIMITED - REFERRALS
@endsection
@section('extrastyle')
    <style>
        /*!
 * Datepicker for Bootstrap v1.7.0-dev (https://github.com/uxsolutions/bootstrap-datepicker)
 *
 * Licensed under the Apache License v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 */
        .datepicker {
            padding: 8px 6px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            direction: ltr;
            -webkit-transform: translate3d(0, -40px, 0);
            -moz-transform: translate3d(0, -40px, 0);
            -o-transform: translate3d(0, -40px, 0);
            -ms-transform: translate3d(0, -40px, 0);
            transform: translate3d(0, -40px, 0);
            transition: all 0.3s cubic-bezier(0.215, 0.61, 0.355, 1) 0s, opacity 0.3s ease 0s, height 0s linear 0.35s;
            opacity: 0;
            filter: alpha(opacity=0);
            visibility: hidden;
            display: block;
            width: 254px;
            max-width: 254px; }
        .datepicker.dropdown-menu:before {
            display: none; }
        .datepicker.datepicker-primary {
            background-color: #f96332; }
        .datepicker.datepicker-primary th, .datepicker.datepicker-primary .day div, .datepicker.datepicker-primary table tr td span {
            color: #FFFFFF; }
        .datepicker.datepicker-primary:after {
            border-bottom-color: #f96332; }
        .datepicker.datepicker-primary.datepicker-orient-top:after {
            border-top-color: #f96332; }
        .datepicker.datepicker-primary .dow {
            color: rgba(255, 255, 255, 0.8); }
        .datepicker.datepicker-primary table tr td.old div, .datepicker.datepicker-primary table tr td.new div, .datepicker.datepicker-primary table tr td span.old, .datepicker.datepicker-primary table tr td span.new {
            color: rgba(255, 255, 255, 0.4); }
        .datepicker.datepicker-primary table tr td span:hover, .datepicker.datepicker-primary table tr td span.focused {
            background: rgba(255, 255, 255, 0.1); }
        .datepicker.datepicker-primary .datepicker-switch:hover, .datepicker.datepicker-primary .prev:hover, .datepicker.datepicker-primary .next:hover, .datepicker.datepicker-primary tfoot tr th:hover {
            background: rgba(255, 255, 255, 0.2); }
        .datepicker.datepicker-primary table tr td.active div, .datepicker.datepicker-primary table tr td.active:hover div, .datepicker.datepicker-primary table tr td.active.disabled div, .datepicker.datepicker-primary table tr td.active.disabled:hover div {
            background-color: #FFFFFF;
            color: #f96332; }
        .datepicker.datepicker-primary table tr td.day:hover div, .datepicker.datepicker-primary table tr td.day.focused div {
            background: rgba(255, 255, 255, 0.2); }
        .datepicker.datepicker-primary table tr td.active:hover div, .datepicker.datepicker-primary table tr td.active:hover:hover div, .datepicker.datepicker-primary table tr td.active.disabled:hover div, .datepicker.datepicker-primary table tr td.active.disabled:hover:hover div, .datepicker.datepicker-primary table tr td.active:active div, .datepicker.datepicker-primary table tr td.active:hover:active div, .datepicker.datepicker-primary table tr td.active.disabled:active div, .datepicker.datepicker-primary table tr td.active.disabled:hover:active div, .datepicker.datepicker-primary table tr td.active.active div, .datepicker.datepicker-primary table tr td.active:hover.active div, .datepicker.datepicker-primary table tr td.active.disabled.active div, .datepicker.datepicker-primary table tr td.active.disabled:hover.active div, .datepicker.datepicker-primary table tr td.active.disabled div, .datepicker.datepicker-primary table tr td.active:hover.disabled div, .datepicker.datepicker-primary table tr td.active.disabled.disabled div, .datepicker.datepicker-primary table tr td.active.disabled:hover.disabled div, .datepicker.datepicker-primary table tr td.active[disabled] div, .datepicker.datepicker-primary table tr td.active:hover[disabled] div, .datepicker.datepicker-primary table tr td.active.disabled[disabled] div, .datepicker.datepicker-primary table tr td.active.disabled:hover[disabled] div, .datepicker.datepicker-primary table tr td span.active:hover, .datepicker.datepicker-primary table tr td span.active:hover:hover, .datepicker.datepicker-primary table tr td span.active.disabled:hover, .datepicker.datepicker-primary table tr td span.active.disabled:hover:hover, .datepicker.datepicker-primary table tr td span.active:active, .datepicker.datepicker-primary table tr td span.active:hover:active, .datepicker.datepicker-primary table tr td span.active.disabled:active, .datepicker.datepicker-primary table tr td span.active.disabled:hover:active, .datepicker.datepicker-primary table tr td span.active.active, .datepicker.datepicker-primary table tr td span.active:hover.active, .datepicker.datepicker-primary table tr td span.active.disabled.active, .datepicker.datepicker-primary table tr td span.active.disabled:hover.active, .datepicker.datepicker-primary table tr td span.active.disabled, .datepicker.datepicker-primary table tr td span.active:hover.disabled, .datepicker.datepicker-primary table tr td span.active.disabled.disabled, .datepicker.datepicker-primary table tr td span.active.disabled:hover.disabled, .datepicker.datepicker-primary table tr td span.active[disabled], .datepicker.datepicker-primary table tr td span.active:hover[disabled], .datepicker.datepicker-primary table tr td span.active.disabled[disabled], .datepicker.datepicker-primary table tr td span.active.disabled:hover[disabled] {
            background-color: #FFFFFF; }
        .datepicker.datepicker-primary table tr td span.active:hover, .datepicker.datepicker-primary table tr td span.active:hover:hover, .datepicker.datepicker-primary table tr td span.active.disabled:hover, .datepicker.datepicker-primary table tr td span.active.disabled:hover:hover, .datepicker.datepicker-primary table tr td span.active:active, .datepicker.datepicker-primary table tr td span.active:hover:active, .datepicker.datepicker-primary table tr td span.active.disabled:active, .datepicker.datepicker-primary table tr td span.active.disabled:hover:active, .datepicker.datepicker-primary table tr td span.active.active, .datepicker.datepicker-primary table tr td span.active:hover.active, .datepicker.datepicker-primary table tr td span.active.disabled.active, .datepicker.datepicker-primary table tr td span.active.disabled:hover.active, .datepicker.datepicker-primary table tr td span.active.disabled, .datepicker.datepicker-primary table tr td span.active:hover.disabled, .datepicker.datepicker-primary table tr td span.active.disabled.disabled, .datepicker.datepicker-primary table tr td span.active.disabled:hover.disabled, .datepicker.datepicker-primary table tr td span.active[disabled], .datepicker.datepicker-primary table tr td span.active:hover[disabled], .datepicker.datepicker-primary table tr td span.active.disabled[disabled], .datepicker.datepicker-primary table tr td span.active.disabled:hover[disabled] {
            color: #f96332; }

        .datepicker-inline {
            width: 220px; }

        .datepicker.datepicker-rtl {
            direction: rtl; }

        .datepicker.datepicker-rtl.dropdown-menu {
            left: auto; }

        .datepicker.datepicker-rtl table tr td span {
            float: right; }

        .datepicker-dropdown {
            top: 0;
            left: 0; }

        .datepicker-dropdown:before {
            content: '';
            display: inline-block;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-top: 0;
            border-bottom-color: rgba(0, 0, 0, 0.2);
            position: absolute; }

        .datepicker-dropdown:after {
            content: '';
            display: inline-block;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 6px solid #fff;
            border-top: 0;
            position: absolute; }

        .datepicker-dropdown.datepicker-orient-left:before {
            left: 6px; }

        .datepicker-dropdown.datepicker-orient-left:after {
            left: 7px; }

        .datepicker-dropdown.datepicker-orient-right:before {
            right: 6px; }

        .datepicker-dropdown.datepicker-orient-right:after {
            right: 7px; }

        .datepicker-dropdown.datepicker-orient-bottom:before {
            top: -7px; }

        .datepicker-dropdown.datepicker-orient-bottom:after {
            top: -6px; }

        .datepicker-dropdown.datepicker-orient-top:before {
            bottom: -7px;
            border-bottom: 0;
            border-top: 7px solid transparent; }

        .datepicker-dropdown.datepicker-orient-top:after {
            bottom: -6px;
            border-bottom: 0;
            border-top: 6px solid #fff; }

        .datepicker table {
            margin: 0;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 241px;
            max-width: 241px; }

        .datepicker .day div, .datepicker th {
            -webkit-transition: all 300ms ease 0s;
            -moz-transition: all 300ms ease 0s;
            -o-transition: all 300ms ease 0s;
            -ms-transition: all 300ms ease 0s;
            transition: all 300ms ease 0s;
            text-align: center;
            width: 30px;
            height: 30px;
            line-height: 2.2;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 50%;
            font-weight: 300;
            font-size: 14px;
            border: none;
            z-index: -1;
            position: relative;
            cursor: pointer; }

        .datepicker th {
            color: #f96332; }

        .table-condensed > tbody > tr > td, .table-condensed > tbody > tr > th, .table-condensed > tfoot > tr > td, .table-condensed > tfoot > tr > th, .table-condensed > thead > tr > td, .table-condensed > thead > tr > th {
            padding: 2px;
            text-align: center;
            cursor: pointer; }

        .table-striped .datepicker table tr td, .table-striped .datepicker table tr th {
            background-color: transparent; }

        .datepicker table tr td.day:hover div, .datepicker table tr td.day.focused div {
            background: #eee;
            cursor: pointer; }

        .datepicker table tr td.old, .datepicker table tr td.new {
            color: #B8B8B8; }

        .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
            background: none;
            color: #B8B8B8;
            cursor: default; }

        .datepicker table tr td.highlighted {
            background: #d9edf7;
            border-radius: 0; }

        .datepicker table tr td.today, .datepicker table tr td.today:hover, .datepicker table tr td.today.disabled, .datepicker table tr td.today.disabled:hover {
            background-color: #fde19a;
            background-image: -moz-linear-gradient(to bottom, #fdd49a, #fdf59a);
            background-image: -ms-linear-gradient(to bottom, #fdd49a, #fdf59a);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fdd49a), to(#fdf59a));
            background-image: -webkit-linear-gradient(to bottom, #fdd49a, #fdf59a);
            background-image: -o-linear-gradient(to bottom, #fdd49a, #fdf59a);
            background-image: linear-gradient(to bottom, #fdd49a, #fdf59a);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fdd49a', endColorstr='#fdf59a', GradientType=0);
            border-color: #fdf59a #fdf59a #fbed50;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            color: #000; }

        .datepicker table tr td.today:hover, .datepicker table tr td.today:hover:hover, .datepicker table tr td.today.disabled:hover, .datepicker table tr td.today.disabled:hover:hover, .datepicker table tr td.today:active, .datepicker table tr td.today:hover:active, .datepicker table tr td.today.disabled:active, .datepicker table tr td.today.disabled:hover:active, .datepicker table tr td.today.active, .datepicker table tr td.today:hover.active, .datepicker table tr td.today.disabled.active, .datepicker table tr td.today.disabled:hover.active, .datepicker table tr td.today.disabled, .datepicker table tr td.today:hover.disabled, .datepicker table tr td.today.disabled.disabled, .datepicker table tr td.today.disabled:hover.disabled, .datepicker table tr td.today[disabled], .datepicker table tr td.today:hover[disabled], .datepicker table tr td.today.disabled[disabled], .datepicker table tr td.today.disabled:hover[disabled] {
            background-color: #fdf59a; }

        .datepicker table tr td.today:active, .datepicker table tr td.today:hover:active, .datepicker table tr td.today.disabled:active, .datepicker table tr td.today.disabled:hover:active, .datepicker table tr td.today.active, .datepicker table tr td.today:hover.active, .datepicker table tr td.today.disabled.active, .datepicker table tr td.today.disabled:hover.active {
            background-color: #fbf069 \9; }

        .datepicker table tr td.today:hover:hover {
            color: #000; }

        .datepicker table tr td.today.active:hover {
            color: #fff; }

        .datepicker table tr td.range, .datepicker table tr td.range:hover, .datepicker table tr td.range.disabled, .datepicker table tr td.range.disabled:hover {
            background: #eee;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0; }

        .datepicker table tr td.range.today, .datepicker table tr td.range.today:hover, .datepicker table tr td.range.today.disabled, .datepicker table tr td.range.today.disabled:hover {
            background-color: #f3d17a;
            background-image: -moz-linear-gradient(to bottom, #f3c17a, #f3e97a);
            background-image: -ms-linear-gradient(to bottom, #f3c17a, #f3e97a);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f3c17a), to(#f3e97a));
            background-image: -webkit-linear-gradient(to bottom, #f3c17a, #f3e97a);
            background-image: -o-linear-gradient(to bottom, #f3c17a, #f3e97a);
            background-image: linear-gradient(to bottom, #f3c17a, #f3e97a);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f3c17a', endColorstr='#f3e97a', GradientType=0);
            border-color: #f3e97a #f3e97a #edde34;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0; }

        .datepicker table tr td.range.today:hover, .datepicker table tr td.range.today:hover:hover, .datepicker table tr td.range.today.disabled:hover, .datepicker table tr td.range.today.disabled:hover:hover, .datepicker table tr td.range.today:active, .datepicker table tr td.range.today:hover:active, .datepicker table tr td.range.today.disabled:active, .datepicker table tr td.range.today.disabled:hover:active, .datepicker table tr td.range.today.active, .datepicker table tr td.range.today:hover.active, .datepicker table tr td.range.today.disabled.active, .datepicker table tr td.range.today.disabled:hover.active, .datepicker table tr td.range.today.disabled, .datepicker table tr td.range.today:hover.disabled, .datepicker table tr td.range.today.disabled.disabled, .datepicker table tr td.range.today.disabled:hover.disabled, .datepicker table tr td.range.today[disabled], .datepicker table tr td.range.today:hover[disabled], .datepicker table tr td.range.today.disabled[disabled], .datepicker table tr td.range.today.disabled:hover[disabled] {
            background-color: #f3e97a; }

        .datepicker table tr td.range.today:active, .datepicker table tr td.range.today:hover:active, .datepicker table tr td.range.today.disabled:active, .datepicker table tr td.range.today.disabled:hover:active, .datepicker table tr td.range.today.active, .datepicker table tr td.range.today:hover.active, .datepicker table tr td.range.today.disabled.active, .datepicker table tr td.range.today.disabled:hover.active {
            background-color: #efe24b \9; }

        .datepicker table tr td.selected, .datepicker table tr td.selected:hover, .datepicker table tr td.selected.disabled, .datepicker table tr td.selected.disabled:hover {
            background-color: #9e9e9e;
            background-image: -moz-linear-gradient(to bottom, #b3b3b3, #808080);
            background-image: -ms-linear-gradient(to bottom, #b3b3b3, #808080);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#b3b3b3), to(#808080));
            background-image: -webkit-linear-gradient(to bottom, #b3b3b3, #808080);
            background-image: -o-linear-gradient(to bottom, #b3b3b3, #808080);
            background-image: linear-gradient(to bottom, #b3b3b3, #808080);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#b3b3b3', endColorstr='#808080', GradientType=0);
            border-color: #808080 #808080 #595959;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); }

        .datepicker table tr td.selected:hover, .datepicker table tr td.selected:hover:hover, .datepicker table tr td.selected.disabled:hover, .datepicker table tr td.selected.disabled:hover:hover, .datepicker table tr td.selected:active, .datepicker table tr td.selected:hover:active, .datepicker table tr td.selected.disabled:active, .datepicker table tr td.selected.disabled:hover:active, .datepicker table tr td.selected.active, .datepicker table tr td.selected:hover.active, .datepicker table tr td.selected.disabled.active, .datepicker table tr td.selected.disabled:hover.active, .datepicker table tr td.selected.disabled, .datepicker table tr td.selected:hover.disabled, .datepicker table tr td.selected.disabled.disabled, .datepicker table tr td.selected.disabled:hover.disabled, .datepicker table tr td.selected[disabled], .datepicker table tr td.selected:hover[disabled], .datepicker table tr td.selected.disabled[disabled], .datepicker table tr td.selected.disabled:hover[disabled] {
            background-color: #808080; }

        .datepicker table tr td.selected:active, .datepicker table tr td.selected:hover:active, .datepicker table tr td.selected.disabled:active, .datepicker table tr td.selected.disabled:hover:active, .datepicker table tr td.selected.active, .datepicker table tr td.selected:hover.active, .datepicker table tr td.selected.disabled.active, .datepicker table tr td.selected.disabled:hover.active {
            background-color: #666666 \9; }

        .datepicker table tr td.active div, .datepicker table tr td.active:hover div, .datepicker table tr td.active.disabled div, .datepicker table tr td.active.disabled:hover div {
            background-color: #f96332;
            color: #FFFFFF;
            box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.2); }

        .datepicker table tr td.active:hover div, .datepicker table tr td.active:hover:hover div, .datepicker table tr td.active.disabled:hover div, .datepicker table tr td.active.disabled:hover:hover div, .datepicker table tr td.active:active div, .datepicker table tr td.active:hover:active div, .datepicker table tr td.active.disabled:active div, .datepicker table tr td.active.disabled:hover:active div, .datepicker table tr td.active.active div, .datepicker table tr td.active:hover.active div, .datepicker table tr td.active.disabled.active div, .datepicker table tr td.active.disabled:hover.active div, .datepicker table tr td.active.disabled div, .datepicker table tr td.active:hover.disabled div, .datepicker table tr td.active.disabled.disabled div, .datepicker table tr td.active.disabled:hover.disabled div, .datepicker table tr td.active[disabled] div, .datepicker table tr td.active:hover[disabled] div, .datepicker table tr td.active.disabled[disabled] div, .datepicker table tr td.active.disabled:hover[disabled] div {
            background-color: #f96332; }

        .datepicker table tr td.active:active, .datepicker table tr td.active:hover:active, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active.active, .datepicker table tr td.active:hover.active, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled:hover.active {
            background-color: #003399 \9; }

        .datepicker table tr td span {
            display: block;
            width: 41px;
            height: 41px;
            line-height: 41px;
            float: left;
            margin: 1%;
            font-size: 14px;
            cursor: pointer;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%; }

        .datepicker table tr td span:hover, .datepicker table tr td span.focused {
            background: #eee; }

        .datepicker table tr td span.disabled, .datepicker table tr td span.disabled:hover {
            background: none;
            color: #B8B8B8;
            cursor: default; }

        .datepicker table tr td span.active, .datepicker table tr td span.active:hover, .datepicker table tr td span.active.disabled, .datepicker table tr td span.active.disabled:hover {
            color: #fff;
            background-color: #f96332; }

        .datepicker table tr td span.active:hover, .datepicker table tr td span.active:hover:hover, .datepicker table tr td span.active.disabled:hover, .datepicker table tr td span.active.disabled:hover:hover, .datepicker table tr td span.active:active, .datepicker table tr td span.active:hover:active, .datepicker table tr td span.active.disabled:active, .datepicker table tr td span.active.disabled:hover:active, .datepicker table tr td span.active.active, .datepicker table tr td span.active:hover.active, .datepicker table tr td span.active.disabled.active, .datepicker table tr td span.active.disabled:hover.active, .datepicker table tr td span.active.disabled, .datepicker table tr td span.active:hover.disabled, .datepicker table tr td span.active.disabled.disabled, .datepicker table tr td span.active.disabled:hover.disabled, .datepicker table tr td span.active[disabled], .datepicker table tr td span.active:hover[disabled], .datepicker table tr td span.active.disabled[disabled], .datepicker table tr td span.active.disabled:hover[disabled] {
            background-color: #f96332;
            box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.2); }

        .datepicker table tr td span.active:active, .datepicker table tr td span.active:hover:active, .datepicker table tr td span.active.disabled:active, .datepicker table tr td span.active.disabled:hover:active, .datepicker table tr td span.active.active, .datepicker table tr td span.active:hover.active, .datepicker table tr td span.active.disabled.active, .datepicker table tr td span.active.disabled:hover.active {
            background-color: #003399 \9; }

        .datepicker table tr td span.old, .datepicker table tr td span.new {
            color: #B8B8B8; }

        .datepicker .datepicker-switch {
            width: auto;
            border-radius: 0.1875rem; }

        .datepicker .datepicker-switch, .datepicker .prev, .datepicker .next, .datepicker tfoot tr th {
            cursor: pointer; }

        .datepicker .prev, .datepicker .next {
            width: 35px;
            height: 35px; }
        .datepicker i {
            position: relative;
            top: 2px; }
        .datepicker .prev i {
            left: -1px; }
        .datepicker .next i {
            right: -1px; }

        .datepicker .datepicker-switch:hover, .datepicker .prev:hover, .datepicker .next:hover, .datepicker tfoot tr th:hover {
            background: #eee; }

        .datepicker .prev.disabled, .datepicker .next.disabled {
            visibility: hidden; }

        .datepicker .cw {
            font-size: 10px;
            width: 12px;
            padding: 0 2px 0 5px;
            vertical-align: middle; }

        .input-append.date .add-on, .input-prepend.date .add-on {
            cursor: pointer; }

        .input-append.date .add-on i, .input-prepend.date .add-on i {
            margin-top: 3px; }

        .input-daterange input {
            text-align: center; }

        .input-daterange input:first-child {
            -webkit-border-radius: 3px 0 0 3px;
            -moz-border-radius: 3px 0 0 3px;
            border-radius: 3px 0 0 3px; }

        .input-daterange input:last-child {
            -webkit-border-radius: 0 3px 3px 0;
            -moz-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0; }

        .input-daterange .add-on {
            display: inline-block;
            width: auto;
            min-width: 16px;
            height: 18px;
            padding: 4px 5px;
            font-weight: normal;
            line-height: 18px;
            text-align: center;
            text-shadow: 0 1px 0 #fff;
            vertical-align: middle;
            background-color: #eee;
            border: 1px solid #ccc;
            margin-left: -5px;
            margin-right: -5px; }
        .dropdown-menu {
            border: 0;
            box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
            border-radius: 0.125rem;
            -webkit-transition: all 150ms linear;
            -moz-transition: all 150ms linear;
            -o-transition: all 150ms linear;
            -ms-transition: all 150ms linear;
            transition: all 150ms linear;
            font-size: 14px; }
        .dropdown-menu.dropdown-menu-right:before {
            left: auto;
            right: 10px; }
        .dropdown-menu:before {
            display: inline-block;
            position: absolute;
            width: 0;
            height: 0;
            vertical-align: middle;
            content: "";
            top: -5px;
            left: 10px;
            right: auto;
            color: #FFFFFF;
            border-bottom: .4em solid;
            border-right: .4em solid transparent;
            border-left: .4em solid transparent; }
        .dropdown-menu .dropdown-item {
            font-size: 0.8571em;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            -webkit-transition: all 150ms linear;
            -moz-transition: all 150ms linear;
            -o-transition: all 150ms linear;
            -ms-transition: all 150ms linear;
            transition: all 150ms linear; }
        .dropdown-menu .dropdown-item:hover, .dropdown-menu .dropdown-item:focus {
            background-color: rgba(222, 222, 222, 0.3); }
        .dropdown-menu .dropdown-divider {
            background-color: rgba(222, 222, 222, 0.5); }
        .dropdown-menu .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(182, 182, 182, 0.6);
            font-size: 0.7142em;
            text-transform: uppercase;
            font-weight: 700; }
        .dropdown-menu.dropdown-primary {
            background-color: #f95823; }
        .dropdown-menu.dropdown-primary:before {
            color: #f95823; }
        .dropdown-menu.dropdown-primary .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(255, 255, 255, 0.8); }
        .dropdown-menu.dropdown-primary .dropdown-item {
            color: #FFFFFF; }
        .dropdown-menu.dropdown-primary .dropdown-item:hover, .dropdown-menu.dropdown-primary .dropdown-item:focus {
            background-color: rgba(255, 255, 255, 0.2); }
        .dropdown-menu.dropdown-primary .dropdown-divider {
            background-color: rgba(255, 255, 255, 0.2); }
        .dropdown-menu.dropdown-info {
            background-color: #1da2ff; }
        .dropdown-menu.dropdown-info:before {
            color: #1da2ff; }
        .dropdown-menu.dropdown-info .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(255, 255, 255, 0.8); }
        .dropdown-menu.dropdown-info .dropdown-item {
            color: #FFFFFF; }
        .dropdown-menu.dropdown-info .dropdown-item:hover, .dropdown-menu.dropdown-info .dropdown-item:focus {
            background-color: rgba(255, 255, 255, 0.2); }
        .dropdown-menu.dropdown-info .dropdown-divider {
            background-color: rgba(255, 255, 255, 0.2); }
        .dropdown-menu.dropdown-danger {
            background-color: #ff2727; }
        .dropdown-menu.dropdown-danger:before {
            color: #ff2727; }
        .dropdown-menu.dropdown-danger .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(255, 255, 255, 0.8); }
        .dropdown-menu.dropdown-danger .dropdown-item {
            color: #FFFFFF; }
        .dropdown-menu.dropdown-danger .dropdown-item:hover, .dropdown-menu.dropdown-danger .dropdown-item:focus {
            background-color: rgba(255, 255, 255, 0.2); }
        .dropdown-menu.dropdown-danger .dropdown-divider {
            background-color: rgba(255, 255, 255, 0.2); }
        .dropdown-menu.dropdown-success {
            background-color: #16c00e; }
        .dropdown-menu.dropdown-success:before {
            color: #16c00e; }
        .dropdown-menu.dropdown-success .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(255, 255, 255, 0.8); }
        .dropdown-menu.dropdown-success .dropdown-item {
            color: #FFFFFF; }
        .dropdown-menu.dropdown-success .dropdown-item:hover, .dropdown-menu.dropdown-success .dropdown-item:focus {
            background-color: rgba(255, 255, 255, 0.2); }
        .dropdown-menu.dropdown-success .dropdown-divider {
            background-color: rgba(255, 255, 255, 0.2); }
        .dropdown-menu.dropdown-warning {
            background-color: #ffac27; }
        .dropdown-menu.dropdown-warning:before {
            color: #ffac27; }
        .dropdown-menu.dropdown-warning .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(255, 255, 255, 0.8); }
        .dropdown-menu.dropdown-warning .dropdown-item {
            color: #FFFFFF; }
        .dropdown-menu.dropdown-warning .dropdown-item:hover, .dropdown-menu.dropdown-warning .dropdown-item:focus {
            background-color: rgba(255, 255, 255, 0.2); }
        .dropdown-menu.dropdown-warning .dropdown-divider {
            background-color: rgba(255, 255, 255, 0.2); }
        .dropdown .dropdown-menu {
            -webkit-transform: translate3d(0, -25px, 0);
            -moz-transform: translate3d(0, -25px, 0);
            -o-transform: translate3d(0, -25px, 0);
            -ms-transform: translate3d(0, -25px, 0);
            transform: translate3d(0, -25px, 0);
            visibility: hidden;
            display: block;
            opacity: 0;
            filter: alpha(opacity=0); }
        .dropdown.show .dropdown-menu, .dropdown-menu.open {
            opacity: 1;
            filter: alpha(opacity=100);
            visibility: visible;
            -webkit-transform: translate3d(0, 0px, 0);
            -moz-transform: translate3d(0, 0px, 0);
            -o-transform: translate3d(0, 0px, 0);
            -ms-transform: translate3d(0, 0px, 0);
            transform: translate3d(0, 0px, 0);
        }
    </style>
    <style>
        .form-control::-moz-placeholder {
            color: #DDDDDD;
            opacity: 1;
            filter: alpha(opacity=100); }

        .form-control:-moz-placeholder {
            color: #DDDDDD;
            opacity: 1;
            filter: alpha(opacity=100); }

        .form-control::-webkit-input-placeholder {
            color: #DDDDDD;
            opacity: 1;
            filter: alpha(opacity=100); }

        .form-control:-ms-input-placeholder {
            color: #DDDDDD;
            opacity: 1;
            filter: alpha(opacity=100); }

        .form-control {
            background-color: transparent !important;
            border: 1px solid #E3E3E3 !important;
            border-radius: 30px !important;
            color: #2c2c2c !important;
            line-height: 1em !important;
            font-size: 0.8571em !important;
            -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out !important;
            -moz-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out !important;
            -o-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out !important;
            -ms-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out !important;
            transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;}
        .has-success .form-control {
            border-color: #E3E3E3; }
        .form-control:focus {
            border: 1px solid #f96332 !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline: 0 !important;
            color: #2c2c2c !important; }
        .form-control:focus + .input-group-addon, .form-control:focus ~ .input-group-addon {
            border: 1px solid #f96332;
            border-left: none;
            background-color: transparent; }
        .has-success .form-control, .has-error .form-control, .has-success .form-control:focus, .has-error .form-control:focus {
            -webkit-box-shadow: none;
            box-shadow: none; }
        .has-danger .form-control.form-control-success, .has-danger .form-control.form-control-danger, .has-success .form-control.form-control-success, .has-success .form-control.form-control-danger {
            background-image: none; }
        .has-danger .form-control {
            background-color: #ffcfcf;
            border-color: #ffcfcf;
            color: #FF3636; }
        .has-danger .form-control:focus {
            background-color: rgba(222, 222, 222, 0.3); }
        .form-control + .form-control-feedback {
            border-radius: 0.25rem;
            font-size: 14px;
            margin-top: -7px;
            position: absolute;
            right: 10px;
            top: 50%;
            vertical-align: middle; }
        .open .form-control {
            border-radius: 0.25rem 0.25rem 0 0;
            border-bottom-color: transparent; }
        .form-control + .input-group-addon {
            background-color: #FFFFFF; }

        .has-success:after, .has-danger:after {
            font-family: 'Nucleo Outline';
            content: "\ecf0";
            display: inline-block;
            position: absolute;
            right: 35px;
            top: 12px;
            color: #18ce0f;
            font-size: 11px; }
        .has-success.input-lg:after, .has-danger.input-lg:after {
            font-size: 13px;
            top: 13px; }

        .has-danger:after {
            content: "\ed2b";
            color: #FF3636; }
        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            background-color: #E3E3E3 !important;
            color: #B8B8B8;
            cursor: not-allowed ; }
        .form-group {
            margin-bottom: 0 !important;
        }
        .alert {
            border: 0;
            border-radius: 0;
            color: #FFFFFF !important;
            padding-top: .9rem;
            padding-bottom: .9rem; }
        .alert.alert-success {
            background-color: rgba(24, 206, 15, 0.8); }
        .alert.alert-danger {
            background-color: rgba(255, 54, 54, 0.8); }
        .alert.alert-warning {
            background-color: rgba(255, 178, 54, 0.8); }
        .alert.alert-info {
            background-color: rgba(44, 168, 255, 0.8); }
        .alert.alert-primary {
            background-color: rgba(249, 99, 50, 0.8); }
        .alert .alert-icon {
            display: block;
            float: left;
            margin-right: 15px;
            margin-top: -1px; }
        .alert strong {
            text-transform: uppercase;
            font-size: 12px; }
        .alert i.fa, .alert i.now-ui-icons {
            font-size: 20px; }
        .alert .close {
            color: #FFFFFF ;
            opacity: .9;
            text-shadow: none;
            line-height: 0;
            outline: 0; }
        .alert i.now-ui-icons {
            font-size: 20px !important;
        }

        /*------------------------
            base class definition
        -------------------------*/
        .now-ui-icons {
            display: inline-block;
            font: normal normal normal 14px/1 'Nucleo Outline';
            font-size: inherit;
            speak: none;
            text-transform: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .now-ui-icons.ui-2_like:before {
            content: "\ea37";
        }
        .now-ui-icons.ui-1_bell-53:before {
            content: "\ecda";
        }
        .now-ui-icons.ui-1_simple-remove:before {
            content: "\ed2b";
        }
        .alert .container {
            width: inherit;
        }
        .alert strong {
            text-transform: uppercase;
            font-size: 14px !important;
            color: #ffffff !important;
        }
    </style>
@endsection
@section('body')
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            @include('includes.dashboard-sidebar')
        </div>
        <div class="main-panel">
            @include('includes.dashboard-nav')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <h4 class="title">Withdrawals History</h4>
                                            <p class="category">List of all withdrawals of the user</p>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 earnings-div">
                                            <h4 class="title left">Total Withdrawals: <span class="earnings">1.0BTC</span></h4>
                                            <h4 class="title right">Total Withdrawals: <span class="earnings">1.0BTC</span></h4>
                                        </div>
                                        {{--<div class="col-lg-6 col-sm-6 withdraw-button">
                                            <button type="submit" class="btn btn-primary btn-round left">WITHDRAW</button>
                                            <button type="submit" class="btn btn-primary btn-round right">WITHDRAW</button>
                                        </div>--}}
                                    </div>
                                </div>
                                <div class="content table-responsive">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <span>From:</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control date-picker" value="" data-datepicker-color="primary">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <span>To:</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control date-picker" value="" data-datepicker-color="primary">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <span>&nbsp;</span>
                                            <div class="form-group withdraw-button">
                                                <button class="btn btn-primary btn-round w100" type="button">GO</button>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table table-striped">
                                        <thead>
                                        <tr><th>ID</th>
                                            <th>Amount Withdrawn</th>
                                            <th>Date & Time</th>
                                            <th>Remaining Balance</th>
                                        </tr></thead>
                                        <tbody>
                                        <tr>
                                            <td>17854</td>
                                            <td>1.005BTC</td>
                                            <td>Jun 25, 2017 08:30AM</td>
                                            <td>0.05025BTC</td>
                                        </tr>
                                        <tr>
                                            <td>17854</td>
                                            <td>1.005BTC</td>
                                            <td>Jun 25, 2017 08:30AM</td>
                                            <td>0.05025BTC</td>
                                        </tr>
                                        <tr>
                                            <td>17854</td>
                                            <td>1.005BTC</td>
                                            <td>Jun 25, 2017 08:30AM</td>
                                            <td>0.05025BTC</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">

                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script> <a href="">CRYPTOWEALTH Ltd.</a>, made with <i class="fa fa-heart heart"></i> by <a href="http://facebook.com/siegfred.pags">Siegfred Pagador</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
@section('extrajs')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.navbar-brand').html('Withdrawals History');
            $('#withdrawals').addClass('active');
            $('input').on('click', function() {
                $(this).select();
            });
            $('.referral-link .right, .referral-link-mobile button').on('click', function () {
                $('input').select();
                document.execCommand("copy");
            });
            $date = new Date(Date.now()).toLocaleString().split(',');
            $('input.date-picker').val($date[0]);
        });
    </script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/now-ui-kit.js') }}" type="text/javascript"></script>
@endsection