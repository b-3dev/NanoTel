<?php

namespace NanoTel\Request;

interface RequestInterface
{
    public static function getUpdates(array $args = []): mixed;

    public static function setWebhook(array $args = []): mixed;

    public static function deleteWebhook(array $args = []): mixed;

    public static function WebhookInfo(array $args = []): mixed;

    public static function getMe(array $args = []): mixed;

    public static function logOut(array $args = []): mixed;

    public static function close(array $args = []): mixed;

    public static function sendMessage(array $args = []): mixed;

    public static function forwardMessage(array $args = []): mixed;

    public static function forwardMessages(array $args = []): mixed;

    public static function copyMessage(array $args = []): mixed;

    public static function copyMessages(array $args = []): mixed;

    public static function sendPhoto(array $args = []): mixed;

    public static function sendAudio(array $args = []): mixed;

    public static function sendDocument(array $args = []): mixed;

    public static function sendVideo(array $args = []): mixed;

    public static function sendAnimation(array $args = []): mixed;

    public static function sendVoice(array $args = []): mixed;

    public static function sendVideoNote(array $args = []): mixed;

    public static function sendPaidMedia(array $args = []): mixed;

    public static function sendMediaGroup(array $args = []): mixed;

    public static function sendLocation(array $args = []): mixed;

    public static function sendVenue(array $args = []): mixed;

    public static function sendContact(array $args = []): mixed;

    public static function sendPoll(array $args = []): mixed;

    public static function sendDice(array $args = []): mixed;

    public static function sendChatAction(array $args = []): mixed;

    public static function setMessageReaction(array $args = []): mixed;

    public static function getUserProfilePhotos(array $args = []): mixed;

    public static function setUserEmojiStatus(array $args = []): mixed;

    public static function getFile(array $args = []): mixed;

    public static function banChatMember(array $args = []): mixed;

    public static function unbanChatMember(array $args = []): mixed;

    public static function restrictChatMember(array $args = []): mixed;

    public static function promoteChatMember(array $args = []): mixed;

    public static function setChatAdministratorCustomTitle(array $args = []): mixed;

    public static function banChatSenderChat(array $args = []): mixed;

    public static function unbanChatSenderChat(array $args = []): mixed;

    public static function setChatPermissions(array $args = []): mixed;

    public static function exportChatInviteLink(array $args = []): mixed;

    public static function createChatInviteLink(array $args = []): mixed;

    public static function editChatInviteLink(array $args = []): mixed;

    public static function createChatSubscriptionInviteLink(array $args = []): mixed;

    public static function editChatSubscriptionInviteLink(array $args = []): mixed;

    public static function revokeChatInviteLink(array $args = []): mixed;

    public static function approveChatJoinRequest(array $args = []): mixed;

    public static function declineChatJoinRequest(array $args = []): mixed;

    public static function setChatPhoto(array $args = []): mixed;

    public static function deleteChatPhoto(array $args = []): mixed;

    public static function setChatTitle(array $args = []): mixed;

    public static function setChatDescription(array $args = []): mixed;

    public static function pinChatMessage(array $args = []): mixed;

    public static function unpinChatMessage(array $args = []): mixed;

    public static function unpinAllChatMessages(array $args = []): mixed;

    public static function leaveChat(array $args = []): mixed;

    public static function getChat(array $args = []): mixed;

    public static function getChatAdministrators(array $args = []): mixed;

    public static function getChatMemberCount(array $args = []): mixed;

    public static function getChatMember(array $args = []): mixed;

    public static function setChatStickerSet(array $args = []): mixed;

    public static function deleteChatStickerSet(array $args = []): mixed;

    public static function getForumTopicIconStickers(array $args = []): mixed;

    public static function createForumTopic(array $args = []): mixed;

    public static function editForumTopic(array $args = []): mixed;

    public static function closeForumTopic(array $args = []): mixed;

    public static function reopenForumTopic(array $args = []): mixed;

    public static function deleteForumTopic(array $args = []): mixed;

    public static function unpinAllForumTopicMessages(array $args = []): mixed;

    public static function editGeneralForumTopic(array $args = []): mixed;

    public static function closeGeneralForumTopic(array $args = []): mixed;

    public static function reopenGeneralForumTopic(array $args = []): mixed;

    public static function hideGeneralForumTopic(array $args = []): mixed;

    public static function unhideGeneralForumTopic(array $args = []): mixed;

    public static function unpinAllGeneralForumTopicMessages(array $args = []): mixed;

    public static function answerCallbackQuery(array $args = []): mixed;

    public static function getUserChatBoosts(array $args = []): mixed;

    public static function getBusinessConnection(array $args = []): mixed;

    public static function setMyCommands(array $args = []): mixed;

    public static function deleteMyCommands(array $args = []): mixed;

    public static function getMyCommands(array $args = []): mixed;

    public static function setMyName(array $args = []): mixed;

    public static function getMyName(array $args = []): mixed;

    public static function setMyDescription(array $args = []): mixed;

    public static function getMyDescription(array $args = []): mixed;

    public static function setMyShortDescription(array $args = []): mixed;

    public static function getMyShortDescription(array $args = []): mixed;

    public static function setChatMenuButton(array $args = []): mixed;

    public static function getChatMenuButton(array $args = []): mixed;

    public static function setMyDefaultAdministratorRights(array $args = []): mixed;

    public static function getMyDefaultAdministratorRights(array $args = []): mixed;

    public static function editMessageText(array $args = []): mixed;

    public static function editMessageCaption(array $args = []): mixed;

    public static function editMessageMedia(array $args = []): mixed;

    public static function editMessageLiveLocation(array $args = []): mixed;

    public static function editMessageReplyMarkup(array $args = []): mixed;

    public static function stopPoll(array $args = []): mixed;

    public static function deleteMessage(array $args = []): mixed;

    public static function deleteMessages(array $args = []): mixed;

    public static function sendSticker(array $args = []): mixed;

    public static function getStickerSet(array $args = []): mixed;

    public static function getCustomEmojiStickers(array $args = []): mixed;

    public static function uploadStickerFile(array $args = []): mixed;

    public static function createNewStickerSet(array $args = []): mixed;

    public static function addStickerToSet(array $args = []): mixed;

    public static function setStickerPositionInSet(array $args = []): mixed;

    public static function deleteStickerFromSet(array $args = []): mixed;

    public static function replaceStickerInSet(array $args = []): mixed;

    public static function setStickerEmojiList(array $args = []): mixed;

    public static function setStickerKeywords(array $args = []): mixed;

    public static function setStickerMaskPosition(array $args = []): mixed;

    public static function setStickerSetTitle(array $args = []): mixed;

    public static function setStickerSetThumbnail(array $args = []): mixed;

    public static function setCustomEmojiStickerSetThumbnail(array $args = []): mixed;

    public static function deleteStickerSet(array $args = []): mixed;

    public static function getAvailableGifts(array $args = []): mixed;

    public static function sendGift(array $args = []): mixed;

    public static function verifyUser(array $args = []): mixed;

    public static function verifyChat(array $args = []): mixed;

    public static function removeUserVerification(array $args = []): mixed;

    public static function removeChatVerification(array $args = []): mixed;

    public static function answerWebAppQuery(array $args = []): mixed;

    public static function SentWebAppMessage(array $args = []): mixed;

    public static function savePreparedInlineMessage(array $args = []): mixed;

    public static function PreparedInlineMessage(array $args = []): mixed;

    public static function sendInvoice(array $args = []): mixed;

    public static function createInvoiceLink(array $args = []): mixed;

    public static function answerShippingQuery(array $args = []): mixed;

    public static function answerPreCheckoutQuery(array $args = []): mixed;

    public static function getStarTransactions(array $args = []): mixed;

    public static function refundStarPayment(array $args = []): mixed;

    public static function editUserStarSubscription(array $args = []): mixed;

    public static function setPassportDataErrors(array $args = []): mixed;

    public static function sendGame(array $args = []): mixed;

    public static function setGameScore(array $args = []): mixed;

    public static function getGameHighScores(array $args = []): mixed;
}
