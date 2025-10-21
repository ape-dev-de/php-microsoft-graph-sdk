<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShareAction
 */
class ShareAction
{
    /**
     * The identities the item was shared with in this action.
     * @var string[]
     */
    private array $recipients = [];


    /**
     * @return string[]
     */
    public function getRecipients(): array
    {
        return $this->recipients;
    }

    /**
     * @param string[] $recipients
     */
    public function setRecipients(array $recipients): self
    {
        $this->recipients = $recipients;
        return $this;
    }

}
