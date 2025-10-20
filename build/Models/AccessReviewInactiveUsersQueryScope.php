<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInactiveUsersQueryScope
 */
class AccessReviewInactiveUsersQueryScope
{
    /**
     * Defines the duration of inactivity. Inactivity is based on the last sign in date of the user compared to the access review instance''s start date. If this property is not specified, it''s assigned the default value PT0S.
     */
    private ?string $inactiveDuration;

    public function getInactiveDuration(): ?string
    {
        return $this->inactiveDuration;
    }

    public function setInactiveDuration(?string $inactiveDuration): self
    {
        $this->inactiveDuration = $inactiveDuration;
        return $this;
    }

}
