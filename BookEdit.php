<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2> ข้อมูลหนังสือ </h2>
    </div>
    
  <form>
  <div class="form-group row">
    <label for="BookName" class="col-sm-2 col-form-label">ชื่อหนังสือ</label>
    <div class="col-sm-10">
    <p class="bg-light text-dark">กลยุทธ์จุดกระแส (THE TIPPING POINT)</p>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="Category" class="col-sm-2 col-form-label">ประเภทหนังสือ</label>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    จิตวิทยา/พัฒนาตนเอง
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-list" href="#">นิยาย</a>
    <a class="dropdown-list" href="#">จิตวิทยา/พัฒนาตนเอง</a>
    <a class="dropdown-list" href="#">อาหารและสุขภาพ</a>
  </div>
  </div>

  <div class="form-group row">
    <label for="AuthorName" class="col-sm-2 col-form-label">ผู้แต่ง</label>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Haruki Murakami
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Haruki Murakami</a>
    <a class="dropdown-item" href="#">Malcolm Gladwell</a>
    <a class="dropdown-item" href="#">Meg Jay</a>
    <a class="dropdown-item" href="#">นายแพทย์จางเหวินหง</a>
    <a class="dropdown-item" href="#">Charles Duhigg</a>
    <a class="dropdown-item" href="#">Higashino Keigo</a>
    <a class="dropdown-item" href="#">Matthew Walker</a>
  </div>
  </div>

  <div class="form-group row">
    <label for="Publisher" class="col-sm-2 col-form-label">สำนักพิมพ์</label>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    สำนักพิมพ์กำมะหยี่
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">สำนักพิมพ์กำมะหยี่</a>
    <a class="dropdown-item" href="#">สำนักพิมพ์วีเลิร์น</a>
    <a class="dropdown-item" href="#">สำนักพิมพ์ Amarin Health</a>
    <a class="dropdown-item" href="#">น้ำพุสำนักพิมพ์</a>
    <a class="dropdown-item" href="#">บุ๊คสเคป</a>
  </div>
  </div>

  <div class="form-group row">
    <label for="BookDescription" class="col-sm-2 col-form-label">คำอธิบาย</label>
    <div class="form-group">
      <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="BookPrice" class="col-sm-2 col-form-label">ราคา</label>
  </div>   

  <div class="form-group row">
    <label for="BookNumPages" class="col-sm-2 col-form-label">จำนวนหน้า</label>
  </div>

  <div class="form-group row">
    <label for="BookISBN" class="col-sm-2 col-form-label">ISBN</label>
  </div>
  <div class="form-group row">
    <label for="BookStatus" class="col-sm-2 col-form-label">สถานะการขาย</label>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">ปกติ
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" disabled>เลิกจำหน่าย
      </label>
    </div>
    </div>
        </tr>
        </table>
    </div>
