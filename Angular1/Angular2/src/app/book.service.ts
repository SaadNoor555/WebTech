import { Injectable } from '@angular/core';
import { Book } from './book';

@Injectable({
  providedIn: 'root'
})
export class BookService {
	books: Book[] = [{id:1 , name:"50 Shades", year:2008, availability:true},
					{id:2 , name:"50 Shades Darker", year:2010, availability:false}]
  	constructor() { }
	getBooks(): Book[]{
		return this.books;
	}

	deleteBook(givenBook: Book): Book[]{
		this.books = this.books.filter(book => givenBook.id != book.id )
		return this.books;
	}

	bookToBeUpdated = new Book()
	bookToBeUpdatedIndex : any = 0;
	setBookToBeUpdated(givenBook: Book, givenIndex: Number){
		this.bookToBeUpdated = givenBook
		this.bookToBeUpdatedIndex = givenIndex
	}
	getBookToBeUpdated(): Book{
		return this.bookToBeUpdated;
	}
	updateBook(givenBook: Book){
		// alert(givenBook.name)
		this.books.splice(this.bookToBeUpdatedIndex,1,givenBook)
		// this.router.navigate(['books'])
	}
}
