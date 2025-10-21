<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppFileSystemRule
 */
class Win32LobAppFileSystemRule
{
    /**
     * A value indicating whether to expand environment variables in the 32-bit context on 64-bit systems.
     */
    private ?bool $check32BitOn64System;

    /**
     * The file or folder comparison value.
     */
    private ?string $comparisonValue;

    /**
     * The file or folder name to look up.
     */
    private ?string $fileOrFolderName;

    /**
     */
    private ?string $operationType;

    /**
     */
    private ?string $operator;

    /**
     * A complex type to store file or folder rule data for a Win32 LOB app.
     */
    private ?string $path;


    public function getCheck32BitOn64System(): ?bool
    {
        return $this->check32BitOn64System;
    }

    public function setCheck32BitOn64System(?bool $check32BitOn64System): self
    {
        $this->check32BitOn64System = $check32BitOn64System;
        return $this;
    }

    public function getComparisonValue(): ?string
    {
        return $this->comparisonValue;
    }

    public function setComparisonValue(?string $comparisonValue): self
    {
        $this->comparisonValue = $comparisonValue;
        return $this;
    }

    public function getFileOrFolderName(): ?string
    {
        return $this->fileOrFolderName;
    }

    public function setFileOrFolderName(?string $fileOrFolderName): self
    {
        $this->fileOrFolderName = $fileOrFolderName;
        return $this;
    }

    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    public function setOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    public function getOperator(): ?string
    {
        return $this->operator;
    }

    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }

}
