<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryNoncustodialDataSource
 */
class SecurityEdiscoveryNoncustodialDataSource
{
    public function __construct(
        /** User source or SharePoint site data source as noncustodial data source. */
        public ?string $dataSource = null,
        /** Operation entity that represents the latest indexing for the noncustodial data source. */
        public ?string $lastIndexOperation = null
    ) {}
}
