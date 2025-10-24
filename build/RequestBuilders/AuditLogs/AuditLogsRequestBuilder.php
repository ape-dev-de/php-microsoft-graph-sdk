<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditLogs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AuditLogRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditLogs\DirectoryAuditsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditLogs\ProvisioningRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditLogs\SignInsRequestBuilder;

/**
 * Request builder for /auditLogs
 */
class AuditLogsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get auditLogs
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AuditLogRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AuditLogRoot
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
     * Deserialize response to AuditLogRoot
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
        return new AuditLogRoot($data);
    }
    /**
     * Update auditLogs
     * @param AuditLogRoot $body Request body
     * @return AuditLogRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AuditLogRoot $body): AuditLogRoot
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AuditLogRoot
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new AuditLogRoot($data);
    }
    /**
     * Navigate to directoryAudits
     *
     * @return DirectoryAuditsRequestBuilder
     */
    public function directoryAudits(): DirectoryAuditsRequestBuilder
    {
        return new DirectoryAuditsRequestBuilder($this->client, $this->requestUrl . '/directoryAudits');
    }
    /**
     * Navigate to provisioning
     *
     * @return ProvisioningRequestBuilder
     */
    public function provisioning(): ProvisioningRequestBuilder
    {
        return new ProvisioningRequestBuilder($this->client, $this->requestUrl . '/provisioning');
    }
    /**
     * Navigate to signIns
     *
     * @return SignInsRequestBuilder
     */
    public function signIns(): SignInsRequestBuilder
    {
        return new SignInsRequestBuilder($this->client, $this->requestUrl . '/signIns');
    }
}
