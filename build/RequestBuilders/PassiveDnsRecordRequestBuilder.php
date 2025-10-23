<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityPassiveDnsRecord;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ArtifactRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ParentHostRequestBuilder;

/**
 * Request builder for {passiveDnsRecord-id}
 */
class PassiveDnsRecordRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get passiveDnsRecord
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityPassiveDnsRecord
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityPassiveDnsRecord
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
     * Deserialize response to SecurityPassiveDnsRecord
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
        return new SecurityPassiveDnsRecord($data);
    }
    /**
     * Update the navigation property passiveDnsRecords in security
     * @param SecurityPassiveDnsRecord $body Request body
     * @return SecurityPassiveDnsRecord
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityPassiveDnsRecord $body): SecurityPassiveDnsRecord
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityPassiveDnsRecord
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
        return new SecurityPassiveDnsRecord($data);
    }
    /**
     * Delete navigation property passiveDnsRecords for security
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to artifact
     *
     * @return ArtifactRequestBuilder
     */
    public function artifact(): ArtifactRequestBuilder
    {
        return new ArtifactRequestBuilder($this->client, $this->requestUrl . '/artifact');
    }
    /**
     * Navigate to parentHost
     *
     * @return ParentHostRequestBuilder
     */
    public function parentHost(): ParentHostRequestBuilder
    {
        return new ParentHostRequestBuilder($this->client, $this->requestUrl . '/parentHost');
    }
}
