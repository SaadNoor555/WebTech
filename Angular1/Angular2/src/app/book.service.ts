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
}