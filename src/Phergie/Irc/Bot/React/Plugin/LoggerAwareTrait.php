<?php
/**
 * Phergie (http://phergie.org)
 *
 * @link http://github.com/phergie/phergie-irc-bot-react for the canonical source repository
 * @copyright Copyright (c) 2008-2014 Phergie Development Team (http://phergie.org)
 * @license http://phergie.org/license New BSD License
 * @package Phergie\Irc\Bot\React
 */

namespace Phergie\Irc\Bot\React\Plugin;

use Psr\Log\LoggerAwareTrait as BaseLoggerAwareTrait;

/**
 * Trait for retrieving the optional logger dependency of plugins.
 *
 * @category Phergie
 * @package Phergie\Irc\Bot\React
 */
trait LoggerAwareTrait implements LoggerAwareInterface
{
    use BaseLoggerAwareTrait;

    /**
     * Logger in use by the plugin
     *
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * Returns the logger in use by the plugin.
     *
     * @return \Psr\Log\LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }
}