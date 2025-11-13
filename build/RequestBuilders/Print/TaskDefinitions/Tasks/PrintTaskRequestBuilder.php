<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\TaskDefinitions\Tasks;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrintTask;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\TaskDefinitions\Tasks\DefinitionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\TaskDefinitions\Tasks\TriggerRequestBuilder;

/**
 * Request builder for /print/taskDefinitions/{printTaskDefinition-id}/tasks/{printTask-id}
 */
class PrintTaskRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get printTask
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PrintTask|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PrintTask|null
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
     * Deserialize response to PrintTask|null
     */
    private function deserializeGet(string $body): PrintTask|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PrintTask($data);
    }
    /**
     * Update printTask
     * @param PrintTask $body Request body
     * @return PrintTask|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PrintTask $body): PrintTask|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PrintTask|null
     */
    private function deserializePatch(string $body): PrintTask|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PrintTask($data);
    }
    /**
     * Delete navigation property tasks for print
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
    private function deserializeDelete(string $body): mixed    {
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
     * Navigate to definition
     *
     * @return DefinitionRequestBuilder
     */
    public function definition(): DefinitionRequestBuilder
    {
        return new DefinitionRequestBuilder($this->client, $this->requestUrl . '/definition');
    }
    /**
     * Navigate to trigger
     *
     * @return TriggerRequestBuilder
     */
    public function trigger(): TriggerRequestBuilder
    {
        return new TriggerRequestBuilder($this->client, $this->requestUrl . '/trigger');
    }
}
