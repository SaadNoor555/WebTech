import { Component, OnInit } from '@angular/core';
import { BookService } from '../book.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-update-book',
  templateUrl: './update-book.component.html',
  styleUrls: ['./update-book.component.css']
})
export class UpdateBookComponent implements OnInit {
  
  constructor(private bookService: BookService, private router: Router) { }
  givenBook = this.bookService.getBookToBeUpdated()
  ngOnInit(): void {
  }
  updateBook(){
    // alert(this.givenBook.name)
    this.bookService.updateBook(this.givenBook);
    this.router.navigate(['books'])
  }

}
