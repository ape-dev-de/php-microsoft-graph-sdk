<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ProtectionUnits;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ProtectionUnitBase;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ProtectionUnits\GraphDriveProtectionUnitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ProtectionUnits\GraphMailboxProtectionUnitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ProtectionUnits\GraphSiteProtectionUnitRequestBuilder;

/**
 * Request builder for /solutions/backupRestore/protectionUnits/{protectionUnitBase-id}
 */
class ProtectionUnitBaseRequestBuilder extends RootBaseRequestBuilder
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
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
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
