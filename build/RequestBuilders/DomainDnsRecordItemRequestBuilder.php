<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DomainDnsRecord;

/**
 * Request builder for individual DomainDnsRecord item
 */
class DomainDnsRecordItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DomainDnsRecord item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DomainDnsRecord
     */
    public function get(?array $queryParameters = null): DomainDnsRecord
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DomainDnsRecord::class);
    }

    /**
     * Update DomainDnsRecord item
     *
     * @param DomainDnsRecord $item The item with updated properties
     * @return DomainDnsRecord
     */
    public function patch(DomainDnsRecord $item): DomainDnsRecord
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DomainDnsRecord::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

}
