<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\Jobs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrintJob;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\Jobs\DocumentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\Jobs\AbortRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\Jobs\CancelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\Jobs\RedirectRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\Jobs\StartRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\Jobs\TasksRequestBuilder;

/**
 * Request builder for /print/shares/{printerShare-id}/jobs/{printJob-id}
 */
class PrintJobRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get jobs from print
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PrintJob
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PrintJob
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
     * Deserialize response to PrintJob
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
        return new PrintJob($data);
    }
    /**
     * Update the navigation property jobs in print
     * @param PrintJob $body Request body
     * @return PrintJob
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PrintJob $body): PrintJob
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PrintJob
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
        return new PrintJob($data);
    }
    /**
     * Delete navigation property jobs for print
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
     * Navigate to documents
     *
     * @return DocumentsRequestBuilder
     */
    public function documents(): DocumentsRequestBuilder
    {
        return new DocumentsRequestBuilder($this->client, $this->requestUrl . '/documents');
    }
    /**
     * Navigate to abort
     *
     * @return AbortRequestBuilder
     */
    public function abort(): AbortRequestBuilder
    {
        return new AbortRequestBuilder($this->client, $this->requestUrl . '/abort');
    }
    /**
     * Navigate to cancel
     *
     * @return CancelRequestBuilder
     */
    public function cancel(): CancelRequestBuilder
    {
        return new CancelRequestBuilder($this->client, $this->requestUrl . '/cancel');
    }
    /**
     * Navigate to redirect
     *
     * @return RedirectRequestBuilder
     */
    public function redirect(): RedirectRequestBuilder
    {
        return new RedirectRequestBuilder($this->client, $this->requestUrl . '/redirect');
    }
    /**
     * Navigate to start
     *
     * @return StartRequestBuilder
     */
    public function start(): StartRequestBuilder
    {
        return new StartRequestBuilder($this->client, $this->requestUrl . '/start');
    }
    /**
     * Navigate to tasks
     *
     * @return TasksRequestBuilder
     */
    public function tasks(): TasksRequestBuilder
    {
        return new TasksRequestBuilder($this->client, $this->requestUrl . '/tasks');
    }
}
