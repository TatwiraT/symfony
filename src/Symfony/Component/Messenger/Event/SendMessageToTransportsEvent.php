<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Messenger\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Messenger\Envelope;

/**
 * Event is dispatched before a message is sent to the transport.
 *
 * The event is *only* dispatched if the message will actually
 * be sent to at least one transport. If the message is sent
 * to multiple transports, the message is dispatched only one time.
 *
 * @author Ryan Weaver <ryan@symfonycasts.com>
 */
class SendMessageToTransportsEvent extends Event
{
    private $envelope;

    public function __construct(Envelope $envelope)
    {
        $this->envelope = $envelope;
    }

    public function getEnvelope(): Envelope
    {
        return $this->envelope;
    }

    public function setEnvelope(Envelope $envelope)
    {
        $this->envelope = $envelope;
    }
}
