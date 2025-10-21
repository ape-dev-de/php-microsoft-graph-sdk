<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookSessionInfo
 */
class WorkbookSessionInfo
{
    /**
     * ID of the workbook session.
     */
    private ?string $id;

    /**
     * true for persistent session. false for non-persistent session (view mode)
     */
    private ?string $persistChanges;


    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getPersistChanges(): ?string
    {
        return $this->persistChanges;
    }

    public function setPersistChanges(?string $persistChanges): self
    {
        $this->persistChanges = $persistChanges;
        return $this;
    }

}
