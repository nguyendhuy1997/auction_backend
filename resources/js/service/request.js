const getRequest = (url) => {
    return $.ajax({
        type: 'GET',
        url: `http://localhost:8000/api/${url}`,
        contentType: 'application/json'
    });
}

const postRequest = (url, data) => {
    return $.ajax({
        type: 'POST',
        data: JSON.stringify(data),
        url: `http://localhost:8000/api/${url}`,
        contentType: 'application/json'
    });
}

const getUserId = () => {
    return $.ajax({
        type: 'GET',
        url: `http://localhost:8000/api/getUserId`,
        contentType: 'application/json'
    })
}
export default { getRequest, postRequest, getUserId }