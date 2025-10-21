<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryNoncustodialDataSource
 */
class SecurityEdiscoveryNoncustodialDataSource
{
    /**
     * User source or SharePoint site data source as noncustodial data source.
     */
    private ?string $dataSource;

    /**
     * Operation entity that represents the latest indexing for the noncustodial data source.
     */
    private ?string $lastIndexOperation;


    public function getDataSource(): ?string
    {
        return $this->dataSource;
    }

    public function setDataSource(?string $dataSource): self
    {
        $this->dataSource = $dataSource;
        return $this;
    }

    public function getLastIndexOperation(): ?string
    {
        return $this->lastIndexOperation;
    }

    public function setLastIndexOperation(?string $lastIndexOperation): self
    {
        $this->lastIndexOperation = $lastIndexOperation;
        return $this;
    }

}
