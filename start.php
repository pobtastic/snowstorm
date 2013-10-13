<?php
/**
 * @file
 * Just simply adding the snowstorm js file to a bundle container.
 */

Asset::container('snowstorm')->bundle('snowstorm');
Asset::container('snowstorm')->add('snowstormjs', 'js/snowstorm-min.js');
