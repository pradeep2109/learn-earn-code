<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Chat\V1\Service\Channel;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;

class InviteList extends ListResource {
    /**
     * Construct the InviteList
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the Service that the resource is
     *                           associated with
     * @param string $channelSid The SID of the Channel the new resource belongs to
     */
    public function __construct(Version $version, string $serviceSid, string $channelSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'channelSid' => $channelSid, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Channels/' . \rawurlencode($channelSid) . '/Invites';
    }

    /**
     * Create the InviteInstance
     *
     * @param string $identity The `identity` value that identifies the new
     *                         resource's User
     * @param array|Options $options Optional Arguments
     * @return InviteInstance Created InviteInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $identity, array $options = []): InviteInstance {
        $options = new Values($options);

        $data = Values::of(['Identity' => $identity, 'RoleSid' => $options['roleSid'], ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new InviteInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['channelSid']
        );
    }

    /**
     * Streams InviteInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(array $options = [], int $limit = null, $pageSize = null): Stream {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($options, $limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Reads InviteInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return InviteInstance[] Array of results
     */
    public function read(array $options = [], int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
     * Retrieve a single page of InviteInstance records from the API.
     * Request is executed immediately
     *
     * @param array|Options $options Optional Arguments
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return InvitePage Page of InviteInstance
     */
    public function page(array $options = [], $pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): InvitePage {
        $options = new Values($options);

        $params = Values::of([
            'Identity' => Serialize::map($options['identity'], function($e) { return $e; }),
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new InvitePage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of InviteInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return InvitePage Page of InviteInstance
     */
    public function getPage(string $targetUrl): InvitePage {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new InvitePage($this->version, $response, $this->solution);
    }

    /**
     * Constructs a InviteContext
     *
     * @param string $sid The unique string that identifies the resource
     */
    public function getContext(string $sid): InviteContext {
        return new InviteContext(
            $this->version,
            $this->solution['serviceSid'],
            $this->solution['channelSid'],
            $sid
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Chat.V1.InviteList]';
    }
}