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
     */
    private ?string $recipients;

    public function getRecipients(): ?string
    {
        return $this->recipients;
    }

    public function setRecipients(?string $recipients): self
    {
        $this->recipients = $recipients;
        return $this;
    }

}
