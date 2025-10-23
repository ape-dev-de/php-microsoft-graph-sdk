<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PrintModel;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ConnectorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PrintersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SharesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TaskDefinitionsRequestBuilder;

/**
 * Request builder for print
 */
class PrintRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get print
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PrintModel
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PrintModel
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to PrintModel
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
        return new PrintModel($data);
    }
    /**
     * Update print
     * @param PrintModel $body Request body
     * @return PrintModel
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PrintModel $body): PrintModel
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PrintModel
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
        return new PrintModel($data);
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
     * Navigate to operations
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->requestUrl . '/operations');
    }
    /**
     * Navigate to printers
     *
     * @return PrintersRequestBuilder
     */
    public function printers(): PrintersRequestBuilder
    {
        return new PrintersRequestBuilder($this->client, $this->requestUrl . '/printers');
    }
    /**
     * Navigate to services
     *
     * @return ServicesRequestBuilder
     */
    public function services(): ServicesRequestBuilder
    {
        return new ServicesRequestBuilder($this->client, $this->requestUrl . '/services');
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
     * Navigate to taskDefinitions
     *
     * @return TaskDefinitionsRequestBuilder
     */
    public function taskDefinitions(): TaskDefinitionsRequestBuilder
    {
        return new TaskDefinitionsRequestBuilder($this->client, $this->requestUrl . '/taskDefinitions');
    }
}
