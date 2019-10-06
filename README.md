# Framework Test

[![Build Status](https://travis-ci.com/wp-content-framework/0-framework-test.svg?branch=master)](https://travis-ci.com/wp-content-framework/0-framework-test)
[![codecov](https://codecov.io/gh/wp-content-framework/0-framework-test/branch/master/graph/badge.svg)](https://codecov.io/gh/wp-content-framework/0-framework-test)
[![CodeFactor](https://www.codefactor.io/repository/github/wp-content-framework/0-framework-test/badge)](https://www.codefactor.io/repository/github/wp-content-framework/0-framework-test)
[![License: GPL v2+](https://img.shields.io/badge/License-GPL%20v2%2B-blue.svg)](http://www.gnu.org/licenses/gpl-2.0.html)
[![PHP: >=5.6](https://img.shields.io/badge/PHP-%3E%3D5.6-orange.svg)](http://php.net/)
[![WordPress: >=4.6](https://img.shields.io/badge/WordPress-%3E%3D4.6-brightgreen.svg)](https://wordpress.org/)

WP Content Framework テスト用

<!-- START doctoc -->
<!-- END doctoc -->

## 要件
- PHP 5.6 以上
- WordPress 4.6 以上

## 構成
- code check
  - PHP
    - PHP_CodeSniffer
    - PHPMD
  - JavaScript
    - ESLint
- test
  - PHP
    - PHPUnit
      - PHP v5.6 - v7.2
      - WordPress v4.6 - latest
  - JavaScript
    - Jest
- coverage
  - Coveralls
- deploy
  - GitHub releases
  - WP Directory

## Dependency
[Scripts for Travis CI](https://github.com/wp-content-framework/travis-ci)

## Author
[GitHub (Technote)](https://github.com/technote-space)  
[Blog](https://technote.space)

## プラグイン作成用フレームワーク
[WP Content Framework](https://github.com/wp-content-framework/core)
