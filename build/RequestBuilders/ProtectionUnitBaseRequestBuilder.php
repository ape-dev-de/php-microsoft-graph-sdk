<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ProtectionUnitBase;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphDriveProtectionUnitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphMailboxProtectionUnitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphSiteProtectionUnitRequestBuilder;

/**
 * Request builder for {protectionUnitBase-id}
 */
class ProtectionUnitBaseRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get protectionUnitBase
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ProtectionUnitBase
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ProtectionUnitBase
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to ProtectionUnitBase
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new ProtectionUnitBase($data);
    }
    /**
     * Navigate to graph.driveProtectionUnit
     *
     * @return GraphDriveProtectionUnitRequestBuilder
     */
    public function graphDriveProtectionUnit(): GraphDriveProtectionUnitRequestBuilder
    {
        return new GraphDriveProtectionUnitRequestBuilder($this->client, $this->requestUrl . '/graph.driveProtectionUnit');
    }
    /**
     * Navigate to graph.mailboxProtectionUnit
     *
     * @return GraphMailboxProtectionUnitRequestBuilder
     */
    public function graphMailboxProtectionUnit(): GraphMailboxProtectionUnitRequestBuilder
    {
        return new GraphMailboxProtectionUnitRequestBuilder($this->client, $this->requestUrl . '/graph.mailboxProtectionUnit');
    }
    /**
     * Navigate to graph.siteProtectionUnit
     *
     * @return GraphSiteProtectionUnitRequestBuilder
     */
    public function graphSiteProtectionUnit(): GraphSiteProtectionUnitRequestBuilder
    {
        return new GraphSiteProtectionUnitRequestBuilder($this->client, $this->requestUrl . '/graph.siteProtectionUnit');
    }
}
