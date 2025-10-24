<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrinterShare;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\AllowedGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\AllowedUsersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\JobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\PrinterRequestBuilder;

/**
 * Request builder for /print/shares/{printerShare-id}
 */
class PrinterShareRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get printerShare
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PrinterShare
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PrinterShare
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
     * Deserialize response to PrinterShare
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
        return new PrinterShare($data);
    }
    /**
     * Update printerShare
     * @param PrinterShare $body Request body
     * @return PrinterShare
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PrinterShare $body): PrinterShare
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PrinterShare
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
        return new PrinterShare($data);
    }
    /**
     * Delete printerShare
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
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
     * Navigate to allowedGroups
     *
     * @return AllowedGroupsRequestBuilder
     */
    public function allowedGroups(): AllowedGroupsRequestBuilder
    {
        return new AllowedGroupsRequestBuilder($this->client, $this->requestUrl . '/allowedGroups');
    }
    /**
     * Navigate to allowedUsers
     *
     * @return AllowedUsersRequestBuilder
     */
    public function allowedUsers(): AllowedUsersRequestBuilder
    {
        return new AllowedUsersRequestBuilder($this->client, $this->requestUrl . '/allowedUsers');
    }
    /**
     * Navigate to jobs
     *
     * @return JobsRequestBuilder
     */
    public function jobs(): JobsRequestBuilder
    {
        return new JobsRequestBuilder($this->client, $this->requestUrl . '/jobs');
    }
    /**
     * Navigate to printer
     *
     * @return PrinterRequestBuilder
     */
    public function printer(): PrinterRequestBuilder
    {
        return new PrinterRequestBuilder($this->client, $this->requestUrl . '/printer');
    }
}
