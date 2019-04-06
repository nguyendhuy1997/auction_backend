const userIdKey = 'auction-user-id-key';
export function setUserId(userId){
    localStorage.setItem(userIdKey, userId);
}
export function getUserId(){
    return localStorage.getItem(userIdKey);
}
export function removeUserId(){
    localStorage.removeItem(userIdKey);
}