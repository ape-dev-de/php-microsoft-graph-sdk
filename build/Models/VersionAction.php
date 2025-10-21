<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VersionAction
 */
class VersionAction
{
    /**
     * The name of the new version that was created by this action.
     */
    private ?string $newVersion;


    public function getNewVersion(): ?string
    {
        return $this->newVersion;
    }

    public function setNewVersion(?string $newVersion): self
    {
        $this->newVersion = $newVersion;
        return $this;
    }

}
