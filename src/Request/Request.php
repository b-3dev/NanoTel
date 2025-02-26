<?php

namespace NanoTel\Request;

use NanoTel\Http\HttpClient;
use NanoTel\Request\RequestInterface;

class Request implements RequestInterface
{
    public static function getUpdates(array $args = []): mixed
    {
        return HttpClient::request("getUpdates", $args);
    }

    public static function setWebhook(array $args = []): mixed
    {
        return HttpClient::request("setWebhook", $args);
    }

    public static function deleteWebhook(array $args = []): mixed
    {
        return HttpClient::request("deleteWebhook", $args);
    }

    public static function WebhookInfo(array $args = []): mixed
    {
        return HttpClient::request("WebhookInfo", $args);
    }

    public static function getMe(array $args = []): mixed
    {
        return HttpClient::request("getMe", $args);
    }

    public static function logOut(array $args = []): mixed
    {
        return HttpClient::request("logOut", $args);
    }

    public static function close(array $args = []): mixed
    {
        return HttpClient::request("close", $args);
    }

    public static function sendMessage(array $args = []): mixed
    {
        return HttpClient::request("sendMessage", $args);
    }

    public static function forwardMessage(array $args = []): mixed
    {
        return HttpClient::request("forwardMessage", $args);
    }

    public static function forwardMessages(array $args = []): mixed
    {
        return HttpClient::request("forwardMessages", $args);
    }

    public static function copyMessage(array $args = []): mixed
    {
        return HttpClient::request("copyMessage", $args);
    }

    public static function copyMessages(array $args = []): mixed
    {
        return HttpClient::request("copyMessages", $args);
    }

    public static function sendPhoto(array $args = []): mixed
    {
        return HttpClient::request("sendPhoto", $args);
    }

    public static function sendAudio(array $args = []): mixed
    {
        return HttpClient::request("sendAudio", $args);
    }

    public static function sendDocument(array $args = []): mixed
    {
        return HttpClient::request("sendDocument", $args);
    }

    public static function sendVideo(array $args = []): mixed
    {
        return HttpClient::request("sendVideo", $args);
    }

    public static function sendAnimation(array $args = []): mixed
    {
        return HttpClient::request("sendAnimation", $args);
    }

    public static function sendVoice(array $args = []): mixed
    {
        return HttpClient::request("sendVoice", $args);
    }

    public static function sendVideoNote(array $args = []): mixed
    {
        return HttpClient::request("sendVideoNote", $args);
    }

    public static function sendPaidMedia(array $args = []): mixed
    {
        return HttpClient::request("sendPaidMedia", $args);
    }

    public static function sendMediaGroup(array $args = []): mixed
    {
        return HttpClient::request("sendMediaGroup", $args);
    }

    public static function sendLocation(array $args = []): mixed
    {
        return HttpClient::request("sendLocation", $args);
    }

    public static function sendVenue(array $args = []): mixed
    {
        return HttpClient::request("sendVenue", $args);
    }

    public static function sendContact(array $args = []): mixed
    {
        return HttpClient::request("sendContact", $args);
    }

    public static function sendPoll(array $args = []): mixed
    {
        return HttpClient::request("sendPoll", $args);
    }

    public static function sendDice(array $args = []): mixed
    {
        return HttpClient::request("sendDice", $args);
    }

    public static function sendChatAction(array $args = []): mixed
    {
        return HttpClient::request("sendChatAction", $args);
    }

    public static function setMessageReaction(array $args = []): mixed
    {
        return HttpClient::request("setMessageReaction", $args);
    }

    public static function getUserProfilePhotos(array $args = []): mixed
    {
        return HttpClient::request("getUserProfilePhotos", $args);
    }

    public static function setUserEmojiStatus(array $args = []): mixed
    {
        return HttpClient::request("setUserEmojiStatus", $args);
    }

    public static function getFile(array $args = []): mixed
    {
        return HttpClient::request("getFile", $args);
    }

    public static function banChatMember(array $args = []): mixed
    {
        return HttpClient::request("banChatMember", $args);
    }

    public static function unbanChatMember(array $args = []): mixed
    {
        return HttpClient::request("unbanChatMember", $args);
    }

    public static function restrictChatMember(array $args = []): mixed
    {
        return HttpClient::request("restrictChatMember", $args);
    }

    public static function promoteChatMember(array $args = []): mixed
    {
        return HttpClient::request("promoteChatMember", $args);
    }

    public static function setChatAdministratorCustomTitle(array $args = []): mixed
    {
        return HttpClient::request("setChatAdministratorCustomTitle", $args);
    }

    public static function banChatSenderChat(array $args = []): mixed
    {
        return HttpClient::request("banChatSenderChat", $args);
    }

    public static function unbanChatSenderChat(array $args = []): mixed
    {
        return HttpClient::request("unbanChatSenderChat", $args);
    }

    public static function setChatPermissions(array $args = []): mixed
    {
        return HttpClient::request("setChatPermissions", $args);
    }

    public static function exportChatInviteLink(array $args = []): mixed
    {
        return HttpClient::request("exportChatInviteLink", $args);
    }

    public static function createChatInviteLink(array $args = []): mixed
    {
        return HttpClient::request("createChatInviteLink", $args);
    }

    public static function editChatInviteLink(array $args = []): mixed
    {
        return HttpClient::request("editChatInviteLink", $args);
    }

    public static function createChatSubscriptionInviteLink(array $args = []): mixed
    {
        return HttpClient::request("createChatSubscriptionInviteLink", $args);
    }

    public static function editChatSubscriptionInviteLink(array $args = []): mixed
    {
        return HttpClient::request("editChatSubscriptionInviteLink", $args);
    }

    public static function revokeChatInviteLink(array $args = []): mixed
    {
        return HttpClient::request("revokeChatInviteLink", $args);
    }

    public static function approveChatJoinRequest(array $args = []): mixed
    {
        return HttpClient::request("approveChatJoinRequest", $args);
    }

    public static function declineChatJoinRequest(array $args = []): mixed
    {
        return HttpClient::request("declineChatJoinRequest", $args);
    }

    public static function setChatPhoto(array $args = []): mixed
    {
        return HttpClient::request("setChatPhoto", $args);
    }

    public static function deleteChatPhoto(array $args = []): mixed
    {
        return HttpClient::request("deleteChatPhoto", $args);
    }

    public static function setChatTitle(array $args = []): mixed
    {
        return HttpClient::request("setChatTitle", $args);
    }

    public static function setChatDescription(array $args = []): mixed
    {
        return HttpClient::request("setChatDescription", $args);
    }

    public static function pinChatMessage(array $args = []): mixed
    {
        return HttpClient::request("pinChatMessage", $args);
    }

    public static function unpinChatMessage(array $args = []): mixed
    {
        return HttpClient::request("unpinChatMessage", $args);
    }

    public static function unpinAllChatMessages(array $args = []): mixed
    {
        return HttpClient::request("unpinAllChatMessages", $args);
    }

    public static function leaveChat(array $args = []): mixed
    {
        return HttpClient::request("leaveChat", $args);
    }

    public static function getChat(array $args = []): mixed
    {
        return HttpClient::request("getChat", $args);
    }

    public static function getChatAdministrators(array $args = []): mixed
    {
        return HttpClient::request("getChatAdministrators", $args);
    }

    public static function getChatMemberCount(array $args = []): mixed
    {
        return HttpClient::request("getChatMemberCount", $args);
    }

    public static function getChatMember(array $args = []): mixed
    {
        return HttpClient::request("getChatMember", $args);
    }

    public static function setChatStickerSet(array $args = []): mixed
    {
        return HttpClient::request("setChatStickerSet", $args);
    }

    public static function deleteChatStickerSet(array $args = []): mixed
    {
        return HttpClient::request("deleteChatStickerSet", $args);
    }

    public static function getForumTopicIconStickers(array $args = []): mixed
    {
        return HttpClient::request("getForumTopicIconStickers", $args);
    }

    public static function createForumTopic(array $args = []): mixed
    {
        return HttpClient::request("createForumTopic", $args);
    }

    public static function editForumTopic(array $args = []): mixed
    {
        return HttpClient::request("editForumTopic", $args);
    }

    public static function closeForumTopic(array $args = []): mixed
    {
        return HttpClient::request("closeForumTopic", $args);
    }

    public static function reopenForumTopic(array $args = []): mixed
    {
        return HttpClient::request("reopenForumTopic", $args);
    }

    public static function deleteForumTopic(array $args = []): mixed
    {
        return HttpClient::request("deleteForumTopic", $args);
    }

    public static function unpinAllForumTopicMessages(array $args = []): mixed
    {
        return HttpClient::request("unpinAllForumTopicMessages", $args);
    }

    public static function editGeneralForumTopic(array $args = []): mixed
    {
        return HttpClient::request("editGeneralForumTopic", $args);
    }

    public static function closeGeneralForumTopic(array $args = []): mixed
    {
        return HttpClient::request("closeGeneralForumTopic", $args);
    }

    public static function reopenGeneralForumTopic(array $args = []): mixed
    {
        return HttpClient::request("reopenGeneralForumTopic", $args);
    }

    public static function hideGeneralForumTopic(array $args = []): mixed
    {
        return HttpClient::request("hideGeneralForumTopic", $args);
    }

    public static function unhideGeneralForumTopic(array $args = []): mixed
    {
        return HttpClient::request("unhideGeneralForumTopic", $args);
    }

    public static function unpinAllGeneralForumTopicMessages(array $args = []): mixed
    {
        return HttpClient::request("unpinAllGeneralForumTopicMessages", $args);
    }

    public static function answerCallbackQuery(array $args = []): mixed
    {
        return HttpClient::request("answerCallbackQuery", $args);
    }

    public static function getUserChatBoosts(array $args = []): mixed
    {
        return HttpClient::request("getUserChatBoosts", $args);
    }

    public static function getBusinessConnection(array $args = []): mixed
    {
        return HttpClient::request("getBusinessConnection", $args);
    }

    public static function setMyCommands(array $args = []): mixed
    {
        return HttpClient::request("setMyCommands", $args);
    }

    public static function deleteMyCommands(array $args = []): mixed
    {
        return HttpClient::request("deleteMyCommands", $args);
    }

    public static function getMyCommands(array $args = []): mixed
    {
        return HttpClient::request("getMyCommands", $args);
    }

    public static function setMyName(array $args = []): mixed
    {
        return HttpClient::request("setMyName", $args);
    }

    public static function getMyName(array $args = []): mixed
    {
        return HttpClient::request("getMyName", $args);
    }

    public static function setMyDescription(array $args = []): mixed
    {
        return HttpClient::request("setMyDescription", $args);
    }

    public static function getMyDescription(array $args = []): mixed
    {
        return HttpClient::request("getMyDescription", $args);
    }

    public static function setMyShortDescription(array $args = []): mixed
    {
        return HttpClient::request("setMyShortDescription", $args);
    }

    public static function getMyShortDescription(array $args = []): mixed
    {
        return HttpClient::request("getMyShortDescription", $args);
    }

    public static function setChatMenuButton(array $args = []): mixed
    {
        return HttpClient::request("setChatMenuButton", $args);
    }

    public static function getChatMenuButton(array $args = []): mixed
    {
        return HttpClient::request("getChatMenuButton", $args);
    }

    public static function setMyDefaultAdministratorRights(array $args = []): mixed
    {
        return HttpClient::request("setMyDefaultAdministratorRights", $args);
    }

    public static function getMyDefaultAdministratorRights(array $args = []): mixed
    {
        return HttpClient::request("getMyDefaultAdministratorRights", $args);
    }

    public static function editMessageText(array $args = []): mixed
    {
        return HttpClient::request("editMessageText", $args);
    }

    public static function editMessageCaption(array $args = []): mixed
    {
        return HttpClient::request("editMessageCaption", $args);
    }

    public static function editMessageMedia(array $args = []): mixed
    {
        return HttpClient::request("editMessageMedia", $args);
    }

    public static function editMessageLiveLocation(array $args = []): mixed
    {
        return HttpClient::request("editMessageLiveLocation", $args);
    }

    public static function editMessageReplyMarkup(array $args = []): mixed
    {
        return HttpClient::request("editMessageReplyMarkup", $args);
    }

    public static function stopPoll(array $args = []): mixed
    {
        return HttpClient::request("stopPoll", $args);
    }

    public static function deleteMessage(array $args = []): mixed
    {
        return HttpClient::request("deleteMessage", $args);
    }

    public static function deleteMessages(array $args = []): mixed
    {
        return HttpClient::request("deleteMessages", $args);
    }

    public static function sendSticker(array $args = []): mixed
    {
        return HttpClient::request("sendSticker", $args);
    }

    public static function getStickerSet(array $args = []): mixed
    {
        return HttpClient::request("getStickerSet", $args);
    }

    public static function getCustomEmojiStickers(array $args = []): mixed
    {
        return HttpClient::request("getCustomEmojiStickers", $args);
    }

    public static function uploadStickerFile(array $args = []): mixed
    {
        return HttpClient::request("uploadStickerFile", $args);
    }

    public static function createNewStickerSet(array $args = []): mixed
    {
        return HttpClient::request("createNewStickerSet", $args);
    }

    public static function addStickerToSet(array $args = []): mixed
    {
        return HttpClient::request("addStickerToSet", $args);
    }

    public static function setStickerPositionInSet(array $args = []): mixed
    {
        return HttpClient::request("setStickerPositionInSet", $args);
    }

    public static function deleteStickerFromSet(array $args = []): mixed
    {
        return HttpClient::request("deleteStickerFromSet", $args);
    }

    public static function replaceStickerInSet(array $args = []): mixed
    {
        return HttpClient::request("replaceStickerInSet", $args);
    }

    public static function setStickerEmojiList(array $args = []): mixed
    {
        return HttpClient::request("setStickerEmojiList", $args);
    }

    public static function setStickerKeywords(array $args = []): mixed
    {
        return HttpClient::request("setStickerKeywords", $args);
    }

    public static function setStickerMaskPosition(array $args = []): mixed
    {
        return HttpClient::request("setStickerMaskPosition", $args);
    }

    public static function setStickerSetTitle(array $args = []): mixed
    {
        return HttpClient::request("setStickerSetTitle", $args);
    }

    public static function setStickerSetThumbnail(array $args = []): mixed
    {
        return HttpClient::request("setStickerSetThumbnail", $args);
    }

    public static function setCustomEmojiStickerSetThumbnail(array $args = []): mixed
    {
        return HttpClient::request("setCustomEmojiStickerSetThumbnail", $args);
    }

    public static function deleteStickerSet(array $args = []): mixed
    {
        return HttpClient::request("deleteStickerSet", $args);
    }

    public static function getAvailableGifts(array $args = []): mixed
    {
        return HttpClient::request("getAvailableGifts", $args);
    }

    public static function sendGift(array $args = []): mixed
    {
        return HttpClient::request("sendGift", $args);
    }

    public static function verifyUser(array $args = []): mixed
    {
        return HttpClient::request("verifyUser", $args);
    }

    public static function verifyChat(array $args = []): mixed
    {
        return HttpClient::request("verifyChat", $args);
    }

    public static function removeUserVerification(array $args = []): mixed
    {
        return HttpClient::request("removeUserVerification", $args);
    }

    public static function removeChatVerification(array $args = []): mixed
    {
        return HttpClient::request("removeChatVerification", $args);
    }

    public static function answerWebAppQuery(array $args = []): mixed
    {
        return HttpClient::request("answerWebAppQuery", $args);
    }

    public static function SentWebAppMessage(array $args = []): mixed
    {
        return HttpClient::request("SentWebAppMessage", $args);
    }

    public static function savePreparedInlineMessage(array $args = []): mixed
    {
        return HttpClient::request("savePreparedInlineMessage", $args);
    }

    public static function PreparedInlineMessage(array $args = []): mixed
    {
        return HttpClient::request("PreparedInlineMessage", $args);
    }

    public static function sendInvoice(array $args = []): mixed
    {
        return HttpClient::request("sendInvoice", $args);
    }

    public static function createInvoiceLink(array $args = []): mixed
    {
        return HttpClient::request("createInvoiceLink", $args);
    }

    public static function answerShippingQuery(array $args = []): mixed
    {
        return HttpClient::request("answerShippingQuery", $args);
    }

    public static function answerPreCheckoutQuery(array $args = []): mixed
    {
        return HttpClient::request("answerPreCheckoutQuery", $args);
    }

    public static function getStarTransactions(array $args = []): mixed
    {
        return HttpClient::request("getStarTransactions", $args);
    }

    public static function refundStarPayment(array $args = []): mixed
    {
        return HttpClient::request("refundStarPayment", $args);
    }

    public static function editUserStarSubscription(array $args = []): mixed
    {
        return HttpClient::request("editUserStarSubscription", $args);
    }

    public static function setPassportDataErrors(array $args = []): mixed
    {
        return HttpClient::request("setPassportDataErrors", $args);
    }

    public static function sendGame(array $args = []): mixed
    {
        return HttpClient::request("sendGame", $args);
    }

    public static function setGameScore(array $args = []): mixed
    {
        return HttpClient::request("setGameScore", $args);
    }

    public static function getGameHighScores(array $args = []): mixed
    {
        return HttpClient::request("getGameHighScores", $args);
    }

    public static function __callStatic(string $method, array $args = []): mixed
    {
        return HttpClient::request($method, $args[0] ?? []);
    }
}
