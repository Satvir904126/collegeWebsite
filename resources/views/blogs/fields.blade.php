<style>
    .teacher_image {
        height: 130px;
        width: 230px;
        /* background-color: aqua; */
        border-radius: 12%;
    }

    #image {
        display: none;
    }
</style>
<!-- Blog Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('blog_name', 'Blog Name:') !!}
    {!! Form::text('blog_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {{-- {!! Form::text('category', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!} --}}
    <select class="form-control" name="category" id="category">
        <option value="">Select Category</option>
        <option value="food">Food</option>
        <option value="technology">Technology</option>
        <option value="politics">Politics</option>
        <option value="art">Art</option>
        <option value="socialLife">Social Life </option>
        <option value="others">Others</option>
    </select>
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

{{-- <!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Student Id:') !!}
    {!! Form::text('student_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}}

<!-- Image Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}} <div class="form-group col-sm-6 ">
    {!! Form::label('image', 'Image:') !!}
    <div class="from-group-login">
        <table>
            <thead>
                <tr class="info">

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="image">
                        {{ Html::image('student_images/profile.jpg', null, ['class' =>
                        'teacher_image', 'id' => 'showImage']) }}
                        <input type="file" name="image" id="image" accept="image/x-pmg,image/png,image/jpg,image/jpeg">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:centre,background:#ddd">
                        <input type="button" name="browse_file" id="browse_file"
                            class="form-control text-capitalize btn-browse" class="btn btn-outline-danger"
                            value="Choose">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@push('page_scripts')
<script>
    $('#browse_file').click(function(){
      $('#image').click();
})
$('#image').on('change',function(e){
showFile(this,'#showImage');
})
function showFile(fileInput,img,showName){
if(fileInput.files[0]){
var reader = new FileReader();
reader.onload= function(e){
$(img).attr('src',e.target.result);
}
reader.readAsDataURL(fileInput.files[0]);
}
$(showName).text(fileInput.files[0].name)
};
</script>
@endpush
