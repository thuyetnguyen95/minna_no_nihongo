<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<div class="col-md-12">
    <div class="row">
        <p class="bd-primary">Thêm mới / Chỉnh sửa câu hội thoại </p>
    </div>
    <div class="row" style="margin-bottom: 80px;">
        <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Bài học</label>
                <div class="col-sm-2">
                    <select name="" id="" class="form-control input-sm">
                        <option value="">Bài 1</option>
                        <option value="">Bài 2</option>
                        <option value="">Bài 3</option>
                        <option value="">Bài 4</option>
                        <option value="">Bài 5</option>
                        <option value="">Bài 6</option>
                        <option value="">Bài 7</option>
                        <option value="">Bài 8</option>
                        <option value="">Bài 9</option>
                        <option value="">Bài 11</option>
                        <option value="">Bài 12</option>
                        <option value="">Bài 13</option>
                        <option value="">Bài 14</option>
                        <option value="">Bài 15</option>
                        <option value="">Bài 16</option>
                        <option value="">Bài 17</option>
                        <option value="">Bài 18</option>
                        <option value="">Bài 19</option>
                        <option value="">Bài 20</option>
                        <option value="">Bài 21</option>
                        <option value="">Bài 22</option>
                        <option value="">Bài 23</option>
                        <option value="">Bài 24</option>
                        <option value="">Bài 25</option>
                    </select>
                </div>
                <label for="" class="col-sm-2 control-label" style="margin-left:-65px">Trạng thái</label>
                <div class="col-sm-2">
                    <select name="" id="" class="form-control input-sm">
                        <option value="">Hiển thị</option>
                        <option value="">Tạm ẩn</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Từ kanji</label>
                <div class="col-sm-4">
                    <input type="text" name="title" class="form-control input-sm" value="" placeholder="語">
                </div>
            </div>
            
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Âm hán</label>
                <div class="col-sm-4">
                    <input type="text" name="title" class="form-control input-sm" value="" placeholder="Ngữ">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Nghĩa</label>
                <div class="col-sm-4">
                    <input type="text" name="title" class="form-control input-sm" value="" placeholder="từ,ngôn ngữ">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Kunyomi</label>
                <div class="col-sm-4">
                    <input type="text" name="title" class="form-control input-sm" value="" placeholder="かた_る">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Onyomi</label>
                <div class="col-sm-4">
                    <input type="text" name="title" class="form-control input-sm" value="" placeholder="ゴ">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Nét vẽ</label>
                <div class="col-sm-4">
                    <input type="file" name="title">
                </div>
            </div>

            <div class="form-group">
                <label for="question_alphabet" class="col-sm-2 control-label">Ví dụ</label>
                <div class="col-md-10">
                    <textarea name="" id="tinymce1"></textarea>
                </div>
            </div>
            <!-- row -->
            <div class="form-group" style="margin-top:25px;">
                <label for="answer" class="col-sm-2"></label>
                <button type="submit" class="btn btn-primary">
                    <i class="glyphicon glyphicon-ok"></i>
                    <span style="margin-left:1px;">Lưu</span>
                </button>
                <button type="reset" class="btn btn-warning">
                    <i class="glyphicon glyphicon-refresh"></i>
                    <span style="margin-left:1px;">Nhập lại</span>
                </button>
            </div>
            <!-- end row -->
        </form>
    </div>
</div>

<script>
    tinymce.init({
    selector: '#tinymce1',
    height: 200,
    plugins: ' print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
    toolbar1: 'formatselect | table | bold italic underline forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
    image_advtab: true,
    menubar:false,
    statusbar: false,
    });
</script>