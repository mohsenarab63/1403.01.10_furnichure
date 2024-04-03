<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
</head>
<body>
    <textarea class="form-control" id="editor" rows="10"></textarea>
    <script>
        ClassicEditor
        .create( document.querySelector( '#editor' ), {
            ckfinder: {
                uploadUrl: '{{ route('editor.upload') . '?_token=' . csrf_token() }}',
                options: {
                    resourceType: 'Images',
                    upload: {
                        fileName: 'photo' // Set the name of the uploaded file to 'photo'
                    }
                }
            },
            language: {
                content: 'ar'
            }
        })
        .then( editor => {
            console.log( editor );
        })
        .catch( error => {
            console.error( error );
        })
    </script>
    
</body>
</html>