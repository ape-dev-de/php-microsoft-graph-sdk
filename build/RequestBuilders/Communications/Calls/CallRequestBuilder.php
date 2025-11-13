<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Call;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\AudioRoutingGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\ContentSharingSessionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\AddLargeGalleryViewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\AnswerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\CancelMediaProcessingRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\ChangeScreenSharingRoleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\KeepAliveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\MuteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\PlayPromptRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\RecordResponseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\RedirectRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\RejectRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\SendDtmfTonesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\SubscribeToToneRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\TransferRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\UnmuteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\UpdateRecordingStatusRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\ParticipantsRequestBuilder;

/**
 * Request builder for /communications/calls/{call-id}
 */
class CallRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get call
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Call|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Call|null
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
     * Deserialize response to Call|null
     */
    private function deserializeGet(string $body): Call|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Call($data);
    }
    /**
     * Update the navigation property calls in communications
     * @param Call $body Request body
     * @return Call|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Call $body): Call|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Call|null
     */
    private function deserializePatch(string $body): Call|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Call($data);
    }
    /**
     * Delete call
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
     * Navigate to audioRoutingGroups
     *
     * @return AudioRoutingGroupsRequestBuilder
     */
    public function audioRoutingGroups(): AudioRoutingGroupsRequestBuilder
    {
        return new AudioRoutingGroupsRequestBuilder($this->client, $this->requestUrl . '/audioRoutingGroups');
    }
    /**
     * Navigate to contentSharingSessions
     *
     * @return ContentSharingSessionsRequestBuilder
     */
    public function contentSharingSessions(): ContentSharingSessionsRequestBuilder
    {
        return new ContentSharingSessionsRequestBuilder($this->client, $this->requestUrl . '/contentSharingSessions');
    }
    /**
     * Navigate to addLargeGalleryView
     *
     * @return AddLargeGalleryViewRequestBuilder
     */
    public function addLargeGalleryView(): AddLargeGalleryViewRequestBuilder
    {
        return new AddLargeGalleryViewRequestBuilder($this->client, $this->requestUrl . '/addLargeGalleryView');
    }
    /**
     * Navigate to answer
     *
     * @return AnswerRequestBuilder
     */
    public function answer(): AnswerRequestBuilder
    {
        return new AnswerRequestBuilder($this->client, $this->requestUrl . '/answer');
    }
    /**
     * Navigate to cancelMediaProcessing
     *
     * @return CancelMediaProcessingRequestBuilder
     */
    public function cancelMediaProcessing(): CancelMediaProcessingRequestBuilder
    {
        return new CancelMediaProcessingRequestBuilder($this->client, $this->requestUrl . '/cancelMediaProcessing');
    }
    /**
     * Navigate to changeScreenSharingRole
     *
     * @return ChangeScreenSharingRoleRequestBuilder
     */
    public function changeScreenSharingRole(): ChangeScreenSharingRoleRequestBuilder
    {
        return new ChangeScreenSharingRoleRequestBuilder($this->client, $this->requestUrl . '/changeScreenSharingRole');
    }
    /**
     * Navigate to keepAlive
     *
     * @return KeepAliveRequestBuilder
     */
    public function keepAlive(): KeepAliveRequestBuilder
    {
        return new KeepAliveRequestBuilder($this->client, $this->requestUrl . '/keepAlive');
    }
    /**
     * Navigate to mute
     *
     * @return MuteRequestBuilder
     */
    public function mute(): MuteRequestBuilder
    {
        return new MuteRequestBuilder($this->client, $this->requestUrl . '/mute');
    }
    /**
     * Navigate to playPrompt
     *
     * @return PlayPromptRequestBuilder
     */
    public function playPrompt(): PlayPromptRequestBuilder
    {
        return new PlayPromptRequestBuilder($this->client, $this->requestUrl . '/playPrompt');
    }
    /**
     * Navigate to recordResponse
     *
     * @return RecordResponseRequestBuilder
     */
    public function recordResponse(): RecordResponseRequestBuilder
    {
        return new RecordResponseRequestBuilder($this->client, $this->requestUrl . '/recordResponse');
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
     * Navigate to reject
     *
     * @return RejectRequestBuilder
     */
    public function reject(): RejectRequestBuilder
    {
        return new RejectRequestBuilder($this->client, $this->requestUrl . '/reject');
    }
    /**
     * Navigate to sendDtmfTones
     *
     * @return SendDtmfTonesRequestBuilder
     */
    public function sendDtmfTones(): SendDtmfTonesRequestBuilder
    {
        return new SendDtmfTonesRequestBuilder($this->client, $this->requestUrl . '/sendDtmfTones');
    }
    /**
     * Navigate to subscribeToTone
     *
     * @return SubscribeToToneRequestBuilder
     */
    public function subscribeToTone(): SubscribeToToneRequestBuilder
    {
        return new SubscribeToToneRequestBuilder($this->client, $this->requestUrl . '/subscribeToTone');
    }
    /**
     * Navigate to transfer
     *
     * @return TransferRequestBuilder
     */
    public function transfer(): TransferRequestBuilder
    {
        return new TransferRequestBuilder($this->client, $this->requestUrl . '/transfer');
    }
    /**
     * Navigate to unmute
     *
     * @return UnmuteRequestBuilder
     */
    public function unmute(): UnmuteRequestBuilder
    {
        return new UnmuteRequestBuilder($this->client, $this->requestUrl . '/unmute');
    }
    /**
     * Navigate to updateRecordingStatus
     *
     * @return UpdateRecordingStatusRequestBuilder
     */
    public function updateRecordingStatus(): UpdateRecordingStatusRequestBuilder
    {
        return new UpdateRecordingStatusRequestBuilder($this->client, $this->requestUrl . '/updateRecordingStatus');
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
     * Navigate to participants
     *
     * @return ParticipantsRequestBuilder
     */
    public function participants(): ParticipantsRequestBuilder
    {
        return new ParticipantsRequestBuilder($this->client, $this->requestUrl . '/participants');
    }
}
