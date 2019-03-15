import {Component} from '@angular/core';
import {Book} from "./shared/book";
import {Author} from "./shared/author";

@Component({
  selector: 'bs-root',
  templateUrl: './app.component.html',
  styles: []
})
export class AppComponent {
  listOn = true;
  detailsOn = false;


  book: Book;

  showList(){
    this.listOn = true;
    this.detailsOn = false;
  }

  showDetails(book: Book){
    this.book = book;
    this.listOn = false;
    this.detailsOn = true;
  }
}
