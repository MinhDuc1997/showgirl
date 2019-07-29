function ajax(url) {
    console.log(url)
    $.ajax({
        type: "GET",
        url: url,
        data: ({}),
        success: function (data) {
            for (let i = 0; i < data.data.length; i++) {
                console.log(data.data[i].image.original.url);
                createimg(data.data[i].image.original.url);
            }
            if (data.page.next != null) {
                ajax('function/nextimg.php?next_url=' + btoa(data.page.next))
            }
        }
    });
}
