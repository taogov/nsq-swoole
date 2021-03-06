<?php
/**
 * Author: Janson
 * Create: 2017-05-30
 */
namespace Asan\Nsq\Contracts;

interface MessageInterface {
    /**
     * Get message payload
     *
     * @return string
     */
    public function getPayload();

    /**
     * Get message ID
     *
     * @return string|NULL
     */
    public function getId();

    /**
     * Get attempts
     *
     * @return integer|NULL
     */
    public function getAttempts();

    /**
     * Get timestamp
     *
     * @return float|NULL
     */
    public function getTimestamp();
}
