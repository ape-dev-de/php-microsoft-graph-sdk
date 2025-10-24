<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\MailFolders\ChildFolders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MailFolder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\MailFolders\ChildFolders\MessageRulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\MailFolders\ChildFolders\MessagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\MailFolders\ChildFolders\CopyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\MailFolders\ChildFolders\MoveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\MailFolders\ChildFolders\PermanentDeleteRequestBuilder;

/**
 * Request builder for /me/mailFolders/{mailFolder-id}/childFolders/{mailFolder-id1}
 */
class MailFolderRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get childFolders from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param string|null $includeHiddenFolders Include Hidden Folders
     * @return MailFolder
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?string $includeHiddenFolders = null): MailFolder
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($includeHiddenFolders !== null && $includeHiddenFolders !== '') {
            $queryParams['includeHiddenFolders'] = $includeHiddenFolders;
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
     * Update the navigation property childFolders in me
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
     * Delete navigation property childFolders for me
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
