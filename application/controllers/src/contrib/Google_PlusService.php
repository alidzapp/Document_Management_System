<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


/**
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_PlusService(...);
 *   $activities = $plusService->activities;
 *  </code>
 */
class Google_ActivitiesServiceResource extends Google_ServiceResource
{


    /**
     * Search public activities. (activities.search)
     *
     * @param string $query Full-text search query string.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy Specifies how to order search results.
     * @opt_param string pageToken The continuation token, used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response. This token may be of any length.
     * @opt_param string maxResults The maximum number of activities to include in the response, used for paging. For any response, the actual number returned may be less than the specified maxResults.
     * @opt_param string language Specify the preferred language to search with. See search language codes for available values.
     * @return Google_ActivityFeed
     */
    public function search($query, $optParams = array())
    {
        $params = array('query' => $query);
        $params = array_merge($params, $optParams);
        $data = $this->__call('search', array($params));
        if ($this->useObjects()) {
            return new Google_ActivityFeed($data);
        } else {
            return $data;
        }
    }

    /**
     * List all of the activities in the specified collection for a particular user. (activities.list)
     *
     * @param string $userId The ID of the user to get activities for. The special value "me" can be used to indicate the authenticated user.
     * @param string $collection The collection of activities to list.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string maxResults The maximum number of activities to include in the response, used for paging. For any response, the actual number returned may be less than the specified maxResults.
     * @return Google_ActivityFeed
     */
    public function listActivities($userId, $collection, $optParams = array())
    {
        $params = array('userId' => $userId, 'collection' => $collection);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_ActivityFeed($data);
        } else {
            return $data;
        }
    }

    /**
     * Get an activity. (activities.get)
     *
     * @param string $activityId The ID of the activity to get.
     * @param array $optParams Optional parameters.
     * @return Google_Activity
     */
    public function get($activityId, $optParams = array())
    {
        $params = array('activityId' => $activityId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Activity($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_PlusService(...);
 *   $comments = $plusService->comments;
 *  </code>
 */
class Google_CommentsServiceResource extends Google_ServiceResource
{


    /**
     * List all of the comments for an activity. (comments.list)
     *
     * @param string $activityId The ID of the activity to get comments for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string maxResults The maximum number of comments to include in the response, used for paging. For any response, the actual number returned may be less than the specified maxResults.
     * @opt_param string sortOrder The order in which to sort the list of comments.
     * @return Google_CommentFeed
     */
    public function listComments($activityId, $optParams = array())
    {
        $params = array('activityId' => $activityId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_CommentFeed($data);
        } else {
            return $data;
        }
    }

    /**
     * Get a comment. (comments.get)
     *
     * @param string $commentId The ID of the comment to get.
     * @param array $optParams Optional parameters.
     * @return Google_Comment
     */
    public function get($commentId, $optParams = array())
    {
        $params = array('commentId' => $commentId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Comment($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "people" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_PlusService(...);
 *   $people = $plusService->people;
 *  </code>
 */
class Google_PeopleServiceResource extends Google_ServiceResource
{


    /**
     * List all of the people in the specified collection for a particular activity.
     * (people.listByActivity)
     *
     * @param string $activityId The ID of the activity to get the list of people for.
     * @param string $collection The collection of people to list.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string maxResults The maximum number of people to include in the response, used for paging. For any response, the actual number returned may be less than the specified maxResults.
     * @return Google_PeopleFeed
     */
    public function listByActivity($activityId, $collection, $optParams = array())
    {
        $params = array('activityId' => $activityId, 'collection' => $collection);
        $params = array_merge($params, $optParams);
        $data = $this->__call('listByActivity', array($params));
        if ($this->useObjects()) {
            return new Google_PeopleFeed($data);
        } else {
            return $data;
        }
    }

    /**
     * Search all public profiles. (people.search)
     *
     * @param string $query Specify a query string for full text search of public text in all profiles.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response. This token may be of any length.
     * @opt_param string maxResults The maximum number of people to include in the response, used for paging. For any response, the actual number returned may be less than the specified maxResults.
     * @opt_param string language Specify the preferred language to search with. See search language codes for available values.
     * @return Google_PeopleFeed
     */
    public function search($query, $optParams = array())
    {
        $params = array('query' => $query);
        $params = array_merge($params, $optParams);
        $data = $this->__call('search', array($params));
        if ($this->useObjects()) {
            return new Google_PeopleFeed($data);
        } else {
            return $data;
        }
    }

    /**
     * Get a person's profile. (people.get)
     *
     * @param string $userId The ID of the person to get the profile for. The special value "me" can be used to indicate the authenticated user.
     * @param array $optParams Optional parameters.
     * @return Google_Person
     */
    public function get($userId, $optParams = array())
    {
        $params = array('userId' => $userId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Google_Person($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Plus (v1).
 *
 * <p>
 * The Google+ API enables developers to build on top of the Google+ platform.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/+/api/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_PlusService extends Google_Service
{
    public $activities;
    public $comments;
    public $people;

    /**
     * Constructs the internal representation of the Plus service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'plus/v1/';
        $this->version = 'v1';
        $this->serviceName = 'plus';

        $client->addService($this->serviceName, $this->version);
        $this->activities = new Google_ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"search": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"orderBy": {"default": "recent", "enum": ["best", "recent"], "type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "default": "10", "maximum": "20", "minimum": "1", "location": "query", "type": "integer"}, "language": {"default": "", "type": "string", "location": "query"}, "query": {"required": true, "type": "string", "location": "query"}}, "id": "plus.activities.search", "httpMethod": "GET", "path": "activities", "response": {"$ref": "ActivityFeed"}}, "list": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "alt": {"default": "json", "enum": ["json"], "type": "string", "location": "query"}, "userId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"format": "uint32", "default": "20", "maximum": "100", "minimum": "1", "location": "query", "type": "integer"}, "collection": {"required": true, "type": "string", "location": "path", "enum": ["public"]}}, "id": "plus.activities.list", "httpMethod": "GET", "path": "people/{userId}/activities/{collection}", "response": {"$ref": "ActivityFeed"}}, "get": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}, "alt": {"default": "json", "enum": ["json"], "type": "string", "location": "query"}}, "id": "plus.activities.get", "httpMethod": "GET", "path": "activities/{activityId}", "response": {"$ref": "Activity"}}}}', true));
        $this->comments = new Google_CommentsServiceResource($this, $this->serviceName, 'comments', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "activityId": {"required": true, "type": "string", "location": "path"}, "alt": {"default": "json", "enum": ["json"], "type": "string", "location": "query"}, "maxResults": {"format": "uint32", "default": "20", "maximum": "100", "minimum": "0", "location": "query", "type": "integer"}, "sortOrder": {"default": "ascending", "enum": ["ascending", "descending"], "type": "string", "location": "query"}}, "id": "plus.comments.list", "httpMethod": "GET", "path": "activities/{activityId}/comments", "response": {"$ref": "CommentFeed"}}, "get": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"commentId": {"required": true, "type": "string", "location": "path"}}, "id": "plus.comments.get", "httpMethod": "GET", "path": "comments/{commentId}", "response": {"$ref": "Comment"}}}}', true));
        $this->people = new Google_PeopleServiceResource($this, $this->serviceName, 'people', json_decode('{"methods": {"listByActivity": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "activityId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"format": "uint32", "default": "20", "maximum": "100", "minimum": "1", "location": "query", "type": "integer"}, "collection": {"required": true, "type": "string", "location": "path", "enum": ["plusoners", "resharers"]}}, "id": "plus.people.listByActivity", "httpMethod": "GET", "path": "activities/{activityId}/people/{collection}", "response": {"$ref": "PeopleFeed"}}, "search": {"scopes": ["https://www.googleapis.com/auth/plus.me"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "default": "10", "maximum": "20", "minimum": "1", "location": "query", "type": "integer"}, "language": {"default": "", "type": "string", "location": "query"}, "query": {"required": true, "type": "string", "location": "query"}}, "id": "plus.people.search", "httpMethod": "GET", "path": "people", "response": {"$ref": "PeopleFeed"}}, "get": {"scopes": ["https://www.googleapis.com/auth/plus.me", "https://www.googleapis.com/auth/userinfo.email"], "parameters": {"userId": {"required": true, "type": "string", "location": "path"}}, "id": "plus.people.get", "httpMethod": "GET", "path": "people/{userId}", "response": {"$ref": "Person"}}}}', true));

    }
}

class Google_Acl extends Google_Model
{
    public $items;
    public $kind;
    public $description;
    protected $__itemsType = 'Google_PlusAclentryResource';
    protected $__itemsDataType = 'array';

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->assertIsArray($items, 'Google_PlusAclentryResource', __METHOD__);
        $this->items = $items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}

class Google_Activity extends Google_Model
{
    public $placeName;
    public $kind;
    public $updated;
    public $provider;
    public $title;
    public $url;
    public $geocode;
    public $object;
    public $placeId;
    public $actor;
    public $id;
    public $access;
    public $verb;
    public $etag;
    public $radius;
    public $address;
    public $crosspostSource;
    public $annotation;
    public $published;
    protected $__providerType = 'Google_ActivityProvider';
    protected $__providerDataType = '';
    protected $__objectType = 'Google_ActivityObject';
    protected $__objectDataType = '';
    protected $__actorType = 'Google_ActivityActor';
    protected $__actorDataType = '';
    protected $__accessType = 'Google_Acl';
    protected $__accessDataType = '';

    public function getPlaceName()
    {
        return $this->placeName;
    }

    public function setPlaceName($placeName)
    {
        $this->placeName = $placeName;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getProvider()
    {
        return $this->provider;
    }

    public function setProvider(Google_ActivityProvider $provider)
    {
        $this->provider = $provider;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getGeocode()
    {
        return $this->geocode;
    }

    public function setGeocode($geocode)
    {
        $this->geocode = $geocode;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function setObject(Google_ActivityObject $object)
    {
        $this->object = $object;
    }

    public function getPlaceId()
    {
        return $this->placeId;
    }

    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
    }

    public function getActor()
    {
        return $this->actor;
    }

    public function setActor(Google_ActivityActor $actor)
    {
        $this->actor = $actor;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getAccess()
    {
        return $this->access;
    }

    public function setAccess(Google_Acl $access)
    {
        $this->access = $access;
    }

    public function getVerb()
    {
        return $this->verb;
    }

    public function setVerb($verb)
    {
        $this->verb = $verb;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getCrosspostSource()
    {
        return $this->crosspostSource;
    }

    public function setCrosspostSource($crosspostSource)
    {
        $this->crosspostSource = $crosspostSource;
    }

    public function getAnnotation()
    {
        return $this->annotation;
    }

    public function setAnnotation($annotation)
    {
        $this->annotation = $annotation;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function setPublished($published)
    {
        $this->published = $published;
    }
}

class Google_ActivityActor extends Google_Model
{
    public $url;
    public $image;
    public $displayName;
    public $id;
    public $name;
    protected $__imageType = 'Google_ActivityActorImage';
    protected $__imageDataType = '';
    protected $__nameType = 'Google_ActivityActorName';
    protected $__nameDataType = '';

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage(Google_ActivityActorImage $image)
    {
        $this->image = $image;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(Google_ActivityActorName $name)
    {
        $this->name = $name;
    }
}

class Google_ActivityActorImage extends Google_Model
{
    public $url;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
}

class Google_ActivityActorName extends Google_Model
{
    public $givenName;
    public $familyName;

    public function getGivenName()
    {
        return $this->givenName;
    }

    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }
}

class Google_ActivityFeed extends Google_Model
{
    public $nextPageToken;
    public $kind;
    public $title;
    public $items;
    public $updated;
    public $nextLink;
    public $etag;
    public $id;
    public $selfLink;
    protected $__itemsType = 'Google_Activity';
    protected $__itemsDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->assertIsArray($items, 'Google_Activity', __METHOD__);
        $this->items = $items;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getNextLink()
    {
        return $this->nextLink;
    }

    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_ActivityObject extends Google_Model
{
    public $resharers;
    public $attachments;
    public $originalContent;
    public $plusoners;
    public $actor;
    public $content;
    public $url;
    public $replies;
    public $id;
    public $objectType;
    protected $__resharersType = 'Google_ActivityObjectResharers';
    protected $__resharersDataType = '';
    protected $__attachmentsType = 'Google_ActivityObjectAttachments';
    protected $__attachmentsDataType = 'array';
    protected $__plusonersType = 'Google_ActivityObjectPlusoners';
    protected $__plusonersDataType = '';
    protected $__actorType = 'Google_ActivityObjectActor';
    protected $__actorDataType = '';
    protected $__repliesType = 'Google_ActivityObjectReplies';
    protected $__repliesDataType = '';

    public function getResharers()
    {
        return $this->resharers;
    }

    public function setResharers(Google_ActivityObjectResharers $resharers)
    {
        $this->resharers = $resharers;
    }

    public function getAttachments()
    {
        return $this->attachments;
    }

    public function setAttachments($attachments)
    {
        $this->assertIsArray($attachments, 'Google_ActivityObjectAttachments', __METHOD__);
        $this->attachments = $attachments;
    }

    public function getOriginalContent()
    {
        return $this->originalContent;
    }

    public function setOriginalContent($originalContent)
    {
        $this->originalContent = $originalContent;
    }

    public function getPlusoners()
    {
        return $this->plusoners;
    }

    public function setPlusoners(Google_ActivityObjectPlusoners $plusoners)
    {
        $this->plusoners = $plusoners;
    }

    public function getActor()
    {
        return $this->actor;
    }

    public function setActor(Google_ActivityObjectActor $actor)
    {
        $this->actor = $actor;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getReplies()
    {
        return $this->replies;
    }

    public function setReplies(Google_ActivityObjectReplies $replies)
    {
        $this->replies = $replies;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getObjectType()
    {
        return $this->objectType;
    }

    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }
}

class Google_ActivityObjectActor extends Google_Model
{
    public $url;
    public $image;
    public $displayName;
    public $id;
    protected $__imageType = 'Google_ActivityObjectActorImage';
    protected $__imageDataType = '';

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage(Google_ActivityObjectActorImage $image)
    {
        $this->image = $image;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

class Google_ActivityObjectActorImage extends Google_Model
{
    public $url;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
}

class Google_ActivityObjectAttachments extends Google_Model
{
    public $displayName;
    public $fullImage;
    public $url;
    public $image;
    public $content;
    public $embed;
    public $id;
    public $objectType;
    protected $__fullImageType = 'Google_ActivityObjectAttachmentsFullImage';
    protected $__fullImageDataType = '';
    protected $__imageType = 'Google_ActivityObjectAttachmentsImage';
    protected $__imageDataType = '';
    protected $__embedType = 'Google_ActivityObjectAttachmentsEmbed';
    protected $__embedDataType = '';

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getFullImage()
    {
        return $this->fullImage;
    }

    public function setFullImage(Google_ActivityObjectAttachmentsFullImage $fullImage)
    {
        $this->fullImage = $fullImage;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage(Google_ActivityObjectAttachmentsImage $image)
    {
        $this->image = $image;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getEmbed()
    {
        return $this->embed;
    }

    public function setEmbed(Google_ActivityObjectAttachmentsEmbed $embed)
    {
        $this->embed = $embed;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getObjectType()
    {
        return $this->objectType;
    }

    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }
}

class Google_ActivityObjectAttachmentsEmbed extends Google_Model
{
    public $url;
    public $type;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

class Google_ActivityObjectAttachmentsFullImage extends Google_Model
{
    public $url;
    public $width;
    public $type;
    public $height;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }
}

class Google_ActivityObjectAttachmentsImage extends Google_Model
{
    public $url;
    public $width;
    public $type;
    public $height;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }
}

class Google_ActivityObjectPlusoners extends Google_Model
{
    public $totalItems;
    public $selfLink;

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_ActivityObjectReplies extends Google_Model
{
    public $totalItems;
    public $selfLink;

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_ActivityObjectResharers extends Google_Model
{
    public $totalItems;
    public $selfLink;

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_ActivityProvider extends Google_Model
{
    public $title;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}

class Google_Comment extends Google_Model
{
    public $inReplyTo;
    public $kind;
    public $object;
    public $updated;
    public $actor;
    public $verb;
    public $etag;
    public $published;
    public $id;
    public $selfLink;
    protected $__inReplyToType = 'Google_CommentInReplyTo';
    protected $__inReplyToDataType = 'array';
    protected $__objectType = 'Google_CommentObject';
    protected $__objectDataType = '';
    protected $__actorType = 'Google_CommentActor';
    protected $__actorDataType = '';

    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }

    public function setInReplyTo($inReplyTo)
    {
        $this->assertIsArray($inReplyTo, 'Google_CommentInReplyTo', __METHOD__);
        $this->inReplyTo = $inReplyTo;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function setObject(Google_CommentObject $object)
    {
        $this->object = $object;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getActor()
    {
        return $this->actor;
    }

    public function setActor(Google_CommentActor $actor)
    {
        $this->actor = $actor;
    }

    public function getVerb()
    {
        return $this->verb;
    }

    public function setVerb($verb)
    {
        $this->verb = $verb;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function setPublished($published)
    {
        $this->published = $published;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_CommentActor extends Google_Model
{
    public $url;
    public $image;
    public $displayName;
    public $id;
    protected $__imageType = 'Google_CommentActorImage';
    protected $__imageDataType = '';

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage(Google_CommentActorImage $image)
    {
        $this->image = $image;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

class Google_CommentActorImage extends Google_Model
{
    public $url;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
}

class Google_CommentFeed extends Google_Model
{
    public $nextPageToken;
    public $kind;
    public $title;
    public $items;
    public $updated;
    public $nextLink;
    public $etag;
    public $id;
    protected $__itemsType = 'Google_Comment';
    protected $__itemsDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->assertIsArray($items, 'Google_Comment', __METHOD__);
        $this->items = $items;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getNextLink()
    {
        return $this->nextLink;
    }

    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

class Google_CommentInReplyTo extends Google_Model
{
    public $url;
    public $id;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

class Google_CommentObject extends Google_Model
{
    public $content;
    public $objectType;

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getObjectType()
    {
        return $this->objectType;
    }

    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }
}

class Google_PeopleFeed extends Google_Model
{
    public $nextPageToken;
    public $kind;
    public $title;
    public $items;
    public $etag;
    public $selfLink;
    protected $__itemsType = 'Google_Person';
    protected $__itemsDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->assertIsArray($items, 'Google_Person', __METHOD__);
        $this->items = $items;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_Person extends Google_Model
{
    public $relationshipStatus;
    public $organizations;
    public $kind;
    public $displayName;
    public $name;
    public $url;
    public $gender;
    public $aboutMe;
    public $tagline;
    public $urls;
    public $placesLived;
    public $emails;
    public $nickname;
    public $birthday;
    public $etag;
    public $image;
    public $hasApp;
    public $id;
    public $languagesSpoken;
    public $currentLocation;
    public $objectType;
    protected $__organizationsType = 'Google_PersonOrganizations';
    protected $__organizationsDataType = 'array';
    protected $__nameType = 'Google_PersonName';
    protected $__nameDataType = '';
    protected $__urlsType = 'Google_PersonUrls';
    protected $__urlsDataType = 'array';
    protected $__placesLivedType = 'Google_PersonPlacesLived';
    protected $__placesLivedDataType = 'array';
    protected $__emailsType = 'Google_PersonEmails';
    protected $__emailsDataType = 'array';
    protected $__imageType = 'Google_PersonImage';
    protected $__imageDataType = '';

    public function getRelationshipStatus()
    {
        return $this->relationshipStatus;
    }

    public function setRelationshipStatus($relationshipStatus)
    {
        $this->relationshipStatus = $relationshipStatus;
    }

    public function getOrganizations()
    {
        return $this->organizations;
    }

    public function setOrganizations($organizations)
    {
        $this->assertIsArray($organizations, 'Google_PersonOrganizations', __METHOD__);
        $this->organizations = $organizations;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(Google_PersonName $name)
    {
        $this->name = $name;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;
    }

    public function getTagline()
    {
        return $this->tagline;
    }

    public function setTagline($tagline)
    {
        $this->tagline = $tagline;
    }

    public function getUrls()
    {
        return $this->urls;
    }

    public function setUrls($urls)
    {
        $this->assertIsArray($urls, 'Google_PersonUrls', __METHOD__);
        $this->urls = $urls;
    }

    public function getPlacesLived()
    {
        return $this->placesLived;
    }

    public function setPlacesLived($placesLived)
    {
        $this->assertIsArray($placesLived, 'Google_PersonPlacesLived', __METHOD__);
        $this->placesLived = $placesLived;
    }

    public function getEmails()
    {
        return $this->emails;
    }

    public function setEmails($emails)
    {
        $this->assertIsArray($emails, 'Google_PersonEmails', __METHOD__);
        $this->emails = $emails;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage(Google_PersonImage $image)
    {
        $this->image = $image;
    }

    public function getHasApp()
    {
        return $this->hasApp;
    }

    public function setHasApp($hasApp)
    {
        $this->hasApp = $hasApp;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLanguagesSpoken()
    {
        return $this->languagesSpoken;
    }

    public function setLanguagesSpoken($languagesSpoken)
    {
        $this->languagesSpoken = $languagesSpoken;
    }

    public function getCurrentLocation()
    {
        return $this->currentLocation;
    }

    public function setCurrentLocation($currentLocation)
    {
        $this->currentLocation = $currentLocation;
    }

    public function getObjectType()
    {
        return $this->objectType;
    }

    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }
}

class Google_PersonEmails extends Google_Model
{
    public $type;
    public $primary;
    public $value;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getPrimary()
    {
        return $this->primary;
    }

    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_PersonImage extends Google_Model
{
    public $url;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
}

class Google_PersonName extends Google_Model
{
    public $honorificPrefix;
    public $middleName;
    public $familyName;
    public $formatted;
    public $givenName;
    public $honorificSuffix;

    public function getHonorificPrefix()
    {
        return $this->honorificPrefix;
    }

    public function setHonorificPrefix($honorificPrefix)
    {
        $this->honorificPrefix = $honorificPrefix;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    public function getFormatted()
    {
        return $this->formatted;
    }

    public function setFormatted($formatted)
    {
        $this->formatted = $formatted;
    }

    public function getGivenName()
    {
        return $this->givenName;
    }

    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    public function getHonorificSuffix()
    {
        return $this->honorificSuffix;
    }

    public function setHonorificSuffix($honorificSuffix)
    {
        $this->honorificSuffix = $honorificSuffix;
    }
}

class Google_PersonOrganizations extends Google_Model
{
    public $startDate;
    public $endDate;
    public $description;
    public $title;
    public $primary;
    public $location;
    public $department;
    public $type;
    public $name;

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getPrimary()
    {
        return $this->primary;
    }

    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Google_PersonPlacesLived extends Google_Model
{
    public $primary;
    public $value;

    public function getPrimary()
    {
        return $this->primary;
    }

    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_PersonUrls extends Google_Model
{
    public $type;
    public $primary;
    public $value;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getPrimary()
    {
        return $this->primary;
    }

    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_PlusAclentryResource extends Google_Model
{
    public $type;
    public $id;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}
