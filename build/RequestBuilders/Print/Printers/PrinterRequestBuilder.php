<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Printers;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Printer;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Printers\ConnectorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Printers\JobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Printers\RestoreFactoryDefaultsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Printers\SharesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Printers\TaskTriggersRequestBuilder;

/**
 * Request builder for /print/printers/{printer-id}
 */
class PrinterRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get printer
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Printer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Printer
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
     * Deserialize response to Printer
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
        return new Printer($data);
    }
    /**
     * Update printer
     * @param Printer $body Request body
     * @return Printer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Printer $body): Printer
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Printer
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
        return new Printer($data);
    }
    /**
     * Delete printer
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
     * Navigate to connectors
     *
     * @return ConnectorsRequestBuilder
     */
    public function connectors(): ConnectorsRequestBuilder
    {
        return new ConnectorsRequestBuilder($this->client, $this->requestUrl . '/connectors');
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
     * Navigate to restoreFactoryDefaults
     *
     * @return RestoreFactoryDefaultsRequestBuilder
     */
    public function restoreFactoryDefaults(): RestoreFactoryDefaultsRequestBuilder
    {
        return new RestoreFactoryDefaultsRequestBuilder($this->client, $this->requestUrl . '/restoreFactoryDefaults');
    }
    /**
     * Navigate to shares
     *
     * @return SharesRequestBuilder
     */
    public function shares(): SharesRequestBuilder
    {
        return new SharesRequestBuilder($this->client, $this->requestUrl . '/shares');
    }
    /**
     * Navigate to taskTriggers
     *
     * @return TaskTriggersRequestBuilder
     */
    public function taskTriggers(): TaskTriggersRequestBuilder
    {
        return new TaskTriggersRequestBuilder($this->client, $this->requestUrl . '/taskTriggers');
    }
}
