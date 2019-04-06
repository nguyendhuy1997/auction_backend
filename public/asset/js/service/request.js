const getRequest = (url) => {
    return $.ajax({
        type: 'GET',
        url: `http://localhost:8000/api/${url}`,
    });
}

const postRequest = (url, data) => {

}
export default { getRequest }