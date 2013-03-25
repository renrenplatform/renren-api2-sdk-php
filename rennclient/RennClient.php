<?php
include_once ('RennClientBase.php');
include_once ('service/ShareService.php');
include_once ('service/StatusService.php');
include_once ('service/AlbumService.php');
include_once ('service/UbbService.php');
include_once ('service/NotificationService.php');
include_once ('service/FeedService.php');
include_once ('service/BlogService.php');
include_once ('service/PhotoService.php');
include_once ('service/UserService.php');
include_once ('service/ProfileService.php');

class RennClient extends RennClientBase {
        private $shareService;
        private $statusService;
        private $albumService;
        private $ubbService;
        private $notificationService;
        private $feedService;
        private $blogService;
        private $photoService;
        private $userService;
        private $profileService;
        function getShareService() {
                if (empty ($this -> shareService )) {
                        $this->shareService = new ShareService ( $this, $this->accessToken );
                }
                return $this->shareService;
        }
        function getStatusService() {
                if (empty ($this -> statusService )) {
                        $this->statusService = new StatusService ( $this, $this->accessToken );
                }
                return $this->statusService;
        }
        function getAlbumService() {
                if (empty ($this -> albumService )) {
                        $this->albumService = new AlbumService ( $this, $this->accessToken );
                }
                return $this->albumService;
        }
        function getUbbService() {
                if (empty ($this -> ubbService )) {
                        $this->ubbService = new UbbService ( $this, $this->accessToken );
                }
                return $this->ubbService;
        }
        function getNotificationService() {
                if (empty ($this -> notificationService )) {
                        $this->notificationService = new NotificationService ( $this, $this->accessToken );
                }
                return $this->notificationService;
        }
        function getFeedService() {
                if (empty ($this -> feedService )) {
                        $this->feedService = new FeedService ( $this, $this->accessToken );
                }
                return $this->feedService;
        }
        function getBlogService() {
                if (empty ($this -> blogService )) {
                        $this->blogService = new BlogService ( $this, $this->accessToken );
                }
                return $this->blogService;
        }
        function getPhotoService() {
                if (empty ($this -> photoService )) {
                        $this->photoService = new PhotoService ( $this, $this->accessToken );
                }
                return $this->photoService;
        }
        function getUserService() {
                if (empty ($this -> userService )) {
                        $this->userService = new UserService ( $this, $this->accessToken );
                }
                return $this->userService;
        }
        function getProfileService() {
                if (empty ($this -> profileService )) {
                        $this->profileService = new ProfileService ( $this, $this->accessToken );
                }
                return $this->profileService;
        }
}
?>
