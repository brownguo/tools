from fastapi import FastAPI
from pydantic import BaseModel
import uvicorn


app = FastAPI()

class Item(BaseModel):
    code: int
    msg: str

@app.get("/")
def read_root():
    return {"code":200,"msg":"success","data":list(range(1,8))}

@app.get("/items/{item_id}")
def read_item(item_id: int,q: str = None):
    ret_data = {"code":200,"return": item_id, "q": q}
    ret_data = Item(**ret_data)
    return ret_data

if __name__ == '__main__':
    uvicorn.run('main:app')