import { Component, OnInit } from '@angular/core';
import { Book } from '../book';
import { BookService } from '../book.service';
import { Router } from '@angular/router'

@Component({
  selector: 'app-book-list',
  templateUrl: './book-list.component.html',
  styleUrls: ['./book-list.component.css']
})
export class BookListComponent implements OnInit {
	books = this.bookService.getBooks();
  	constructor(private bookService: BookService, private router: Router) {
	}
	ngOnInit(): void {
	}
	deleteThis(givenBook: Book){
		// alert(book.id);
		// const index = this.books.indexOf(givenBook);
		// this.books.splice(index, 1);
		this.books = this.bookService.deleteBook(givenBook)
	}

	updateThis(givenBook: Book, givenIndex: Number){
		this.bookService.setBookToBeUpdated(givenBook, givenIndex)
		this.router.navigate(['update-book'])
	}

}
