<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MailFolder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFoldersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\MessageRulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\MessagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\CopyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\MoveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\PermanentDeleteRequestBuilder;

/**
 * Request builder for /me/mailFolders/{mailFolder-id}
 */
class MailFolderRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get mailFolder
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MailFolder
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MailFolder
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
     * Deserialize response to MailFolder
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
        return new MailFolder($data);
    }
    /**
     * Update mailfolder
     * @param MailFolder $body Request body
     * @return MailFolder
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MailFolder $body): MailFolder
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MailFolder
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
        return new MailFolder($data);
    }
    /**
     * Delete mailFolder
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
     * Navigate to childFolders
     *
     * @return ChildFoldersRequestBuilder
     */
    public function childFolders(): ChildFoldersRequestBuilder
    {
        return new ChildFoldersRequestBuilder($this->client, $this->requestUrl . '/childFolders');
    }
    /**
     * Navigate to messageRules
     *
     * @return MessageRulesRequestBuilder
     */
    public function messageRules(): MessageRulesRequestBuilder
    {
        return new MessageRulesRequestBuilder($this->client, $this->requestUrl . '/messageRules');
    }
    /**
     * Navigate to messages
     *
     * @return MessagesRequestBuilder
     */
    public function messages(): MessagesRequestBuilder
    {
        return new MessagesRequestBuilder($this->client, $this->requestUrl . '/messages');
    }
    /**
     * Navigate to copy
     *
     * @return CopyRequestBuilder
     */
    public function copy(): CopyRequestBuilder
    {
        return new CopyRequestBuilder($this->client, $this->requestUrl . '/copy');
    }
    /**
     * Navigate to move
     *
     * @return MoveRequestBuilder
     */
    public function move(): MoveRequestBuilder
    {
        return new MoveRequestBuilder($this->client, $this->requestUrl . '/move');
    }
    /**
     * Navigate to permanentDelete
     *
     * @return PermanentDeleteRequestBuilder
     */
    public function permanentDelete(): PermanentDeleteRequestBuilder
    {
        return new PermanentDeleteRequestBuilder($this->client, $this->requestUrl . '/permanentDelete');
    }
}
