import { Component, OnInit } from '@angular/core';
import { BookService } from '../book.service';
import { Book } from '../book';
import { Router } from '@angular/router';

@Component({
  selector: 'app-add-book',
  templateUrl: './add-book.component.html',
  styleUrls: ['./add-book.component.css']
})
export class AddBookComponent implements OnInit {

  constructor(private bookService: BookService, private router: Router) { }
  givenBook = new Book

  ngOnInit(): void {
  }
  bookName: string="";

  addBook(){
    alert(this.givenBook.name)
  }
}
